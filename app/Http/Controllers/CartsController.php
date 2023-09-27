<?php

namespace App\Http\Controllers;

use App\Models\carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function saveArrayToSession(Request $request)
    {
        {
            $valueToAdd = $request->input('data');

            if (!session()->has('cart')) {
                session(['cart' => []]);
            }
        
            // Push $valueToAdd onto the session array
            session()->push('cart', $valueToAdd);
        
            return response()->json(['message' => 'Value added to session array successfully']);
        }
    }
    public function removeProduct(Request $request)
    {
        
            $productIdToRemove = $request->input('data');
    
            // Get the 'cart' array from the session
            $cart = session('cart', []);
            
            // Find the first occurrence of the product ID in the 'cart' array
            $key = array_search($productIdToRemove, $cart);
            
            // If the product ID was found (i.e., $key is not false), remove it
            if ($key !== false) {
                unset($cart[$key]);
            }
            
            // Update the 'cart' array in the session
            session(['cart' => array_values($cart)]); // Reindex the array to fix keys
            
            // You can also perform additional logic here, and return a success response if removal was successful
            return response()->json(['message' => 'Value removed from session array successfully']);
    }
    public function removeProductFromCart(Request $request)
    {
        {
            $productIdToRemove = $request->input('productId');

            // Retrieve the cart array from the session
            $cart = session('cart', []);
            
            // Use array_filter to filter the cart array and remove the product ID
            $cart = array_filter($cart, function ($productId) use ($productIdToRemove) {
                return $productId != $productIdToRemove;
            });
            
            // Store the updated cart array back in the session
            session(['cart' => $cart]);
            
            // You can also perform additional logic here and return a success response if removal was successful
            return response()->json(['success' => true]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function show(carts $carts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function edit(carts $carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carts $carts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(carts $carts)
    {
        //
    }
}
