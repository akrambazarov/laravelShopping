<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index() {
        return view('/shopping/web/indexShop');
    }
    public function categories(){
        $categories =Category::get();
        return view('/shopping/web/category');
    }
    public function category($code){
        $category = Category::where('code',$code)->first();
        return view('/shopping/web/category',compact('category'));
    }
    public function  product($product = null){
        return view('/shopping/web/product', ['product' => $product]);
    }
}
