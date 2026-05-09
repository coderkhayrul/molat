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

    public function eventDetail()
    {
        return view('frontend.event');
    }

    public function publishers()
    {
        return view('frontend.publishers');
    }

    public function publisherDetail()
    {
        return view('frontend.publisher');
    }

    public function authors()
    {
        return view('frontend.authors');
    }

    public function authorDetail()
    {
        return view('frontend.author');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    public function success()
    {
        return view('frontend.success');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
