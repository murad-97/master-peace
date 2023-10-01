<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Style;
use App\Models\Review;
use App\Models\User;
use App\Models\Shipment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $reviews = Review::all();
        $Category = Category::all();
       return view("pages.index")->with("reviews", $reviews)->with("Categories", $Category);
       
       

    
}
 
    public function catygoryIndex()
    {
        
      
        $categories = Category::with(['products', 'styles'])->get();
        
        // return view('your-view', compact('categoriesWithStyles'));


       return view("pages.drag2")->with("Categories", $categories);
       
       

    
}
    public function filter($id)
    {
        
      
        $categories = Category::with(['styles', 'products' => function ($query) {
            $query->where('styleId', Request()->id);
        }])->get();
        
        


       return view("pages.drag2")->with("Categories", $categories)->with('style',Request()->id);
       
       

    
}
    public function fullroom()
    {
  
       return view("pages.fullroom");
  
}
    public function deal()
    {
        if (Auth::check()) {
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
     
         // Loop through the collection of products and display their names and quantities
         foreach ($products as $product) {
             $product->quantity = $productQuantities[$product->id];
            
         }
            return view("pages.cart&personal")->with("products", $products);
            }else{
             return view("pages.cart&personal");
            }
       
  
}else{
    return redirect()->route("login");

}

}

public function cart()
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
    
        // Loop through the collection of products and display their names and quantities
        foreach ($products as $product) {
            $product->quantity = $productQuantities[$product->id];
           
        }
           return view("pages.orders")->with("products", $products);
           }else{
            return view("pages.orders");
           }
 
   


}

public function checkOut(Request $request)
    {

        $request->validate([
            'name' =>['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'address' => 'required|max:30',           
            'number' => [
                'required',
                'min:8',
                'regex:/^9627\d{8}$/'
            ]
            ],[
            'number.required' => 'Phone number is required.',
            'number.regex' => 'phone number must start with "9627" and be 12 characters long.',
        ]);
        
        $user = User::find(Auth::user()->id); // Replace $userId with the user's ID

        if ($user) {
            $user->number =$request->number ; // Replace with the actual phone number
            $user->name =$request->name ; // Replace with the actual phone number
            $user->save();
        }
        $user->address()->updateOrCreate([], ['address' => $request->address ]);

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
    
        // Loop through the collection of products and display their names and quantities
        foreach ($products as $product) {
            $product->quantity = $productQuantities[$product->id];
           
        }
           return view("pages.payment")->with("products", $products);
           }else{
            return view("pages.payment");
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
