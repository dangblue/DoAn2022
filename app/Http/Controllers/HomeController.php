<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function shop(){
        return view('shop');
    }

    public function blog(){
        return view('blog');
    }

    public function contact(){
        return view('contact');
    }

    public function shopdetail(){
        return view('pages.shop-detail');
    }

    public function blogdetail(){
        return view('pages.blog-detail');
    }

    public function shopcart(){
        return view('pages.shop-cart');
    }

    public function checkout(){
        return view('pages.check-out');
    }
}
