<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::orderBy("created_at", "desc")->paginate(5);
        return view("posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //store our post


        // 1. validate data
        $validated = $request->validate([
            "title" => "required|max:30|min:5|unique:posts",
            "content" => "required|min:5|max:1000",
            "category" => "required",
            'image' => "required|image|max:2048"
        ]);

        // image path
        $imagePath = $request->file('image')->store('public/images');
        // 2. create post
        $validated = Post::create([
            "title" => $validated["title"],
            "content" => $validated["content"],
            "category" => $validated["category"],
            "image" => $imagePath,

        ]);

        // dump($validated);
        return redirect()->route("posts.create")->with("success", "Post Created Successfully!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
