<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function product_details($id)
{
    $product = Product::findOrFail($id);

    // Assuming you have a relationship named 'reviews' in your Product model.
    $reviews = $product->review;

    // Extract the rating values from the reviews.
    $productRatings = $reviews->pluck('review')->toArray();
    $averageRating = count($productRatings) > 0 ? array_sum($productRatings) / count($productRatings) : 0;

    // Retrieve three products with the same styleId
    $relatedProducts = Product::where('styleId', $product->styleId)
        ->where('id', '!=', $id) // Exclude the currently loaded product
        ->take(3) // Limit to three products
        ->get();

    return view('pages.product-details', [
        'product' => $product,
        'averageRating' => $averageRating,
        'productRatings' => $productRatings,
        'relatedProducts' => $relatedProducts,
    ]);
}




     public function price_products(Request $request, $id=null)
     {
         $categories = Category::all();
         $query = Product::whereBetween('price', [$request->rangemin, $request->rangemax]);

         if ($id!=null) {
             $query->where('categoryId', $id);
         }

         $products = $query->get();

         return view('pages.products', ['products' => $products, 'categories' => $categories]);
     }
     public function search_products(Request $request, $id=null)
     {
         $categories = Category::all();
         $query = Product::where('name', 'like', '%' . $request->search . '%');;

         if ($id!=null) {
             $query->where('categoryId', $id);
         }

         $products = $query->get();

         return view('pages.products', ['products' => $products, 'categories' => $categories]);
     }


    public function subcategories($id = null)
    {
        $query = Product::query();
        $categories =DB::table('categories')->get();

        if ($id !== null) {
            $query->where('categoryId', $id);
        }

        $products = $query->get();

        return view('pages.products', ['products' => $products, 'categories' => $categories]);
    }

    public function review(Request $request)
    {
      Review::create([
"userId"=>Auth::user()->id,
"productId"=>$request->product,
"review"=>$request->review,
"description"=>$request->description,
      ]);
      return redirect()->back();
    }


    public function addproducts($id)
    {


            if (!session()->has('cart')) {
                session(['cart' => []]);
            }

            // Push $valueToAdd onto the session array
            session()->push('cart', $id);
            return redirect()->back();
    }
    public function singleadd($id)
    {


            if (!session()->has('cart')) {
                session(['cart' => []]);
            }

            // Push $valueToAdd onto the session array
            session()->push('cart', $id);
            return redirect()->route("cart");
    }
    public function index()
    {
        //
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $productList= Product::all();
        return view("Admin_Dashboard.products",['products'=>$productList]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
