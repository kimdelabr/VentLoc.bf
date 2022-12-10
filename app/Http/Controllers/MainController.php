<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('/pages/home');

    }



    public function contact(){
        return view('/pages/contact');

    }
    public function blogdetail(){
        return view('/pages/blog-detail');

    }

    public function blog(){
        return view('/pages/blog');

    }

    public function productdetail(){
        return view('/pages/product-detail');

    }

    public function shopingcart(){
        return view('/pages/shoping-cart');

    }
    public function admin(){
        return view('/admin');

    }

    public function about(){
        return view('/pages/about');

    }

    public function adminarticles(){
        return view('/pages/Admin/articles');

    }
    
}
