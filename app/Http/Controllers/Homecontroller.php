<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Homecontroller extends Controller
{
    public function customLogout () {
        Auth::logout(); // Logout the user
        return redirect('/'); // Redirect to the desired page after logout
    }
    public function redirect(){
        $products=Product::all();
         if (Auth::id()){
             if(Auth::User()->usertype=='0'){

               return view('user.home',compact('products'));
             }
             else{
                 return view('user.home',compact('products'));
             }
         }
         else{
             return redirect()->back();
         }
    }
    public function index(){
        $products=Product::all();
       return view('user.home',compact('products'));
    }
    public function contact(){
        return view('user.contact');
    }

    public function showProducts(){
        $products=Product::all();
        if(\Illuminate\Support\Facades\Auth::check()) {
            return view('user.products', compact('products'));
        }
        else {
            return view('auth.login');
        }

    }
    public function showServices(){
        $services=Service::all();
        if(\Illuminate\Support\Facades\Auth::check()) {
            return view('user.services', compact('services'));
        }
        else {
            return view('auth.login');
        }

    }
    public function Booking(){
        if(\Illuminate\Support\Facades\Auth::check()){
            return view('user.booking');
        }
        else {
            return view('auth.login');
        }
    }
}
