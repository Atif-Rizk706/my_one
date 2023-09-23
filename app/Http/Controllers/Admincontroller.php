<?php

namespace App\Http\Controllers;

use App\Models\Product;

use App\Models\Service;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function controlPanel(){
        if(\Illuminate\Support\Facades\Auth::check()){
            return view('admin.control-panel');
        }
        else {
            return view('auth.login');
        }

    }
    public function addProduct(){
        return view('admin.add-product');
    }
    public function saveProduct(Request $request){
        // Validate other form fields...
        // Validate the incoming data (you can customize the validation rules)
        $request->validate([
            'product-name' => 'required|string|max:255',
            'product-description' => 'required|string',
            'product-price' => 'required|numeric',
            'currency' => 'required|string',
            'product-image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Combine price and currency
        $combinedPriceCurrency = $request->input('product-price') . ' ' . $request->input('currency');
        // Handle image upload (store it in storage/app/public)
        $image=$request->file('product-image');
        $imagename=time().".".$image->getClientOriginalExtension();
        $request->file('product-image')->move('product-image',$imagename);

//        $imagePath = $request->file('product-image')->store('public/products');
//        $imageUrl = asset('storage/' . $imagePath);
        // Create a new product in the database
        Product::create([
            'product_name' => $request->input('product-name'),
            'product_description' => $request->input('product-description'),
            'price_currency' => $combinedPriceCurrency,
            'product_image_url' => $imagename,
        ]);

        // Return a response...
        // Return a response (you can customize this as needed)
        return response()->json(['message' => 'تم اضافه المنتج بنجاح']);
    }
    public function addService(){
        return view('admin.add-service');
    }
    public function saveService(Request $request){
        // Validate other form fields...
        // Validate the incoming data (you can customize the validation rules)
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',

        ]);

        // Create a new product in the database
        Service::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),

        ]);

        // Return a response...
        // Return a response (you can customize this as needed)
        return response()->json(['message' => 'تم اضافه الخدمه بنجاح']);


    }
}
