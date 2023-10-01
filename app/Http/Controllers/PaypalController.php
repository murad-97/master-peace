<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

// use App\Models\Product;
use App\Models\Orderdetail;
use App\Models\Orderitem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipment;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PaypalController extends Controller
{
    public function payment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
    
        $productIds = session('cart'); // Your array of product IDs
        $productQuantities = [];
    
        if (is_array($productIds) && count($productIds) > 0) {
            // Calculate product quantities by counting the occurrences of each product ID
            foreach ($productIds as $productId) {
                if (array_key_exists($productId, $productQuantities)) {
                    // If the product ID already exists in the quantities array, increment the quantity
                    $productQuantities[$productId]++;
                } else {
                    // If it's the first occurrence, set the quantity to 1
                    $productQuantities[$productId] = 1;
                }
            }
    
            // Use the Product model to retrieve data from the database based on the IDs
            $products = Product::whereIn('id', array_keys($productQuantities))->get();
    
            $paypalProducts = [];
    
            foreach ($products as $product) {
                $paypalProducts[] = [
                    'name' => $product->name,
                    'description' => $product->shortDescription, // Use shortDescription instead of description
                    'quantity' => $productQuantities[$product->id],
                    'price' => $product->price,
                    'currency' => 'USD',
                ];
            }
    
            $totalAmount = 0;
    
            foreach ($paypalProducts as $paypalProduct) {
                $totalAmount += $paypalProduct['price'] * $paypalProduct['quantity'];
            }
    
            $items = [];
    
            foreach ($products as $product) {
                $items[] = [
                    "name" => $product->name,
                    "description" => $product->shortDescription, // Use shortDescription instead of description
                    "quantity" => $productQuantities[$product->id],
                    "price" => number_format($product->price, 2),
                    "currency" => "USD",
                ];
            }
    
            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('paypal_success'),
                    "cancel_url" => route('paypal_cancel'),
                ],
                "purchase_units" => [
                    [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => number_format($totalAmount, 2),
                        ],
                        
                    ],
                ]
            ]);
    
            if (isset($response['id']) && $response['id'] != null) {
                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        return redirect()->away($link['href']);
                    }
                }
            } else {
                return redirect()->route('paypal_cancel');
            }
        } else {
            return redirect()->route('paypal_cancel');
        }
    }
    



    public function success(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);

        //dd($response);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $productIds = session('cart'); // Your array of product IDs
            $productQuantities = [];
            
            if (is_array($productIds) && count($productIds) > 0) {
                // Calculate product quantities by counting the occurrences of each product ID
                foreach ($productIds as $productId) {
                    if (array_key_exists($productId, $productQuantities)) {
                        // If the product ID already exists in the quantities array, increment the quantity
                        $productQuantities[$productId]++;
                    } else {
                        // If it's the first occurrence, set the quantity to 1
                        $productQuantities[$productId] = 1;
                    }
                }
                $products = Product::whereIn('id', array_keys($productQuantities))->get();
    $total = 0;
                foreach($products as $product){
                        $product->quantity = $productQuantities[$product->id];
    $total += $product->price * $product->quantity;
                }
            }
            Payment::create([
                "userId" => Auth::user()->id,
                "amount" => $total,
                "provider" => "paypal",
                "status" => "success",
                "payment-method" => "paypal",
            ]);
    
            Orderdetail::create([
                "userId" => Auth::user()->id,
                "paymentId" => Payment::where("userId", Auth::user()->id)->latest()->first()->id,
                "shipmentId" => Shipment::where("userId", Auth::user()->id)->latest()->first()->id,
                "total" =>$total,
            ]);
    
            foreach($products as $product){
                Orderitem::create([
                    "orderId"=> Orderdetail::where("userId", Auth::user()->id)->latest()->first()->id,
                    "productId"=> $product->id,
                    "quantity"=> $product->quantity,
                ]);
                
                            }
                            session()->forget('cart');
                            return redirect()->route("home.index");
        } else {
            return redirect()->back();
        }
    }

    public function cancel()
    {
        return redirect()->back();
    }
}