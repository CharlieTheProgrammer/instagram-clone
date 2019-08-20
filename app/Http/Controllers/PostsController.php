<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class PostsController extends Controller
{
    // I'm going to assume the param below is going to be a form object
    public function create()
    {
        return view('posts/create');
    }

    public function save()
    {
        // validate request
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image']
        ]);

        // This is the longer way of inserting data
        // $post = new \App\Post();
        // $post->caption = $data['caption'];
        // $post->image = $data['image'];
        // $post.save();

        // This is the shorthand way of inserting data
        // \App\Post::create($data);

        // This is middleware that grabs the user id from the request
        auth()->user()->posts()->create($data);

        dd(request()->all());
    }
}
