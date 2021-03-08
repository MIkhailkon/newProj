<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $products = Product::get();
        return view('home',compact('products'));
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
        $category = Category::where('code',$code)->first();
        return view('category',compact('category'));
    }

    public function product($category_code,$product_code){
        $product = Product::where('code',$product_code)->first();
        return view('product_card',compact('product'));
    }
    public function admin_add_product(){
        return view('admin_add_product');
    }
}
