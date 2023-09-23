<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('term');

        $products = Product::where('product_name', 'like', "%$searchTerm%")
            ->orWhere('product_description', 'like', "%$searchTerm%")
            ->get();

        return response()->json(['products' => $products]);
    }
    public function showProducts(){
        $products=Product::all();
        return view('admin.all-product', compact('products'));
    }
    public function deleteProduct(Request $request){
        $data=Product::find($request->id);
        $data->delete();
        return response()->json([
            "status"=>true,
            "mes"=>"تم حذف السجل بنجاح",
            "id"=>$request->id,
        ]);

    }
}
