<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function categoryDetail()
    {
        return view('frontend.category');
    }

    public function bookDetail()
    {
        return view('frontend.book');
    }

    public function events()
    {
        return view('frontend.events');
    }
}
