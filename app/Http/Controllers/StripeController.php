<?php

namespace App\Http\Controllers;

use App\Models\Orderdetail;
use App\Models\Orderitem;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function payment(Request $request)
    {
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

    // Define an array to hold the line items for Stripe
    $lineItems = [];

    // Loop through the collection of products and add them to the line items array
  // Define an array to hold the line items for Stripe
$lineItems = [];

// Loop through the collection of products and add them to the line items array
foreach ($products as $product) {
    $lineItems[] = [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $product->name, // Use the product name from your database
            ],
            'unit_amount' => $product->price * 100, // Convert the price to cents
        ],
        'quantity' => $productQuantities[$product->id], // Use the quantity you calculated
    ];
}

// Check if the line_items array is empty before creating the Stripe Checkout session
if (empty($lineItems)) {
    // Handle the case when the cart is empty (no line items)
    // You can redirect or display a message to the user
    return redirect()->route('cart');
}

\Stripe\Stripe::setApiKey(config('stripe.stripe_sk'));
$response = \Stripe\Checkout\Session::create([
    'line_items' => $lineItems, // Use the dynamically created line items
    'mode' => 'payment',
    'success_url' => route('stripe_success'),
    'cancel_url' => route('stripe_cancel'),
]);

return redirect()->away($response->url);

} else {
    // Handle the case when the cart is empty (no line items)
    // You can redirect or display a message to the user
    return redirect()->route('checkOut');
}

        
    }

    public function success()
    {
      
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
            "provider" => "stripe",
            "status" => "success",
            "payment-method" => "stripe",
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

                        return redirect()->route("home.index");

    }

    public function cancel()
    {
        return "Payment is cancelled!";
    }
}
