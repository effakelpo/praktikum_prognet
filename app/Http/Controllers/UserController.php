<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function shop()
    {
        return view('user.shop.index');
    }

    public function contact()
    {
        return view('user.contact.index');
    }

    public function cart()
    {
        return view('user.cart.index');
    }

    public function checkout()
    {
        return view('user.checkout.index');
    }
}
