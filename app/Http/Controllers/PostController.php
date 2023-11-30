<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::orderBy("created_at", "desc")->paginate(5);
        // $markdown = Str::markdown($posts->content);
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
            "title" => "required|max:100|min:5|unique:posts",
            "content" => "required|min:5|",
            "category" => "required",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5128'
        ]);

        // image path
        $imagePath = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imagePath);
        // 2. create post
        Post::create([
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


        //show a single post
        return view("posts.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //edit the post
        $editing = true;
        return view("posts.edit", compact("post", "editing", "post"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
        // 1. validate data
        $validated = $request->validate([
            "title" => "required|max:100|min:5|unique:posts",
            "content" => "required|min:5|",
            "category" => "required",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5128'
        ]);

        // image path
        $imagePath = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $imagePath);

        $post->update($validated);
        return redirect()->route('posts.show')->with('success', 'Post Edited Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //destroy the post
        $post->delete();
        return redirect()->route("home")->with("success", "Post deleted Successfully!");
    }
}
