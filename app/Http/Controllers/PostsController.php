<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class PostsController extends Controller
{
    // Adding middleware to all route calls for this controller
    public function __construct()
    {
        $this->middleware('auth');
    }

    // I'm going to assume the param below is going to be a form object
    public function create()
    {
        return view('posts/create');
    }

    public function save()
    {
        // The default memory limit of 128MB is not enough to perform image manipulation.
        ini_set('memory_limit', '256M');
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

        $imagePath = request('image')->store('uploads', 'public');
        // fit temporarily fits it to a particular size, it doesn't actually resize it.
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        // This is middleware that grabs the user id from the request
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath
        ]);

        // Concat the url with the user's id
        return redirect('/profile/' . auth()->user()->id);
    }

    // This magic below will result in Laravel automatically fetching the Post model and retriving it based on the $post param.
    // This will also cause Laravel to return a 404 error if it cannot find a matching record for the provided $post param.
    // public function show(\App\Post $post)

    // In essence, this saves us from needing to add the following code
    // $post = Post::findOrFail($post);

    public function show($post)
    {
        $post = Post::findOrFail($post);
        return view('posts/show', [
            'post' => $post,
        ]);
    }
}
