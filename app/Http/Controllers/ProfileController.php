<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        $user = User::findOrFail($user);
        return view('profiles/profile', [
            'user' => $user
        ]);
    }

    public function edit($user)
    {
        $user = User::findOrFail($user);
        $this->authorize('update', $user->profile);
        return view('profiles/edit', compact('user'));
    }

    public function update($user)
    {
        $user = User::findOrFail($user);
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => '',
            'image' => 'image',
        ]);


        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::Make(public_path("storage/${imagePath}"))->fit(1000, 1000);
            $image->save();
        }

        auth()->user()->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));
        return redirect("/profile/{$user->id}");
    }
}
