<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index()
    {
        return view("home");
    }

    public function shop()
    {
        return view("shop");
    }
    public function about()
    {
        return view("about");
    }
    public function contact()
    {
        return view("contact_us");
    }
}
