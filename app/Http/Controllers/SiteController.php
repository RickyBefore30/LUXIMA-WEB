<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index(Request $request)
    {
        // if(view()->exists($request->path())){
        //     return view($request->path());
        // }
        // return view('errors.404');

        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function packages()
    {
        return view('packages');
    }

    public function howItWork()
    {
        return view('how-it-work');
    }

    public function blogList()
    {
        return view('blogs.blog-list');
    }

    public function blog()
    {
        return view('blogs.blog-list');
    }

    public function blogDetails()
    {
        return view('blog-single');
    }

    public function listing()
    {
        return view('listings.listing');
    }

    public function listingDetails()
    {
        return view('listing-single');
    }

    public function shop()
    {
        return view('shops.shop');
    }

    public function cart()
    {
        return view('carts.cart');
    }

    public function checkout()
    {
        return view('carts.checkout');
    }

    public function wishlist()
    {
        return view('carts.wishlist');
    }


}
