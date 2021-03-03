<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function categories(){
        $categories = Category::get();
        return view('categories',compact('categories'));

    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function category($code){
        $products = Product::get();
        $category = Category::where('code',$code)->first();
        return view('category',compact('category','products'));
    }
    public function basket(){
        return view('basket');
    }
    public function product($code){
        $product = Product::where('code',$code)->first();
//        dd($product);
        return view('product_card',compact('product'));
    }
    public function admin_add_product(){
        return view('admin_add_product');
    }
}
