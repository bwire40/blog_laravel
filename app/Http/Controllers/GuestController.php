<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function index()
    {

        //
        $posts = Post::orderBy("created_at", "desc")->paginate(100);
        return view("home", compact("posts"));
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
