<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

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

        return view('profiles/edit', compact('user'));
    }

    public function update($user)
    {
        $data = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'url'=>'',
            'image'=>'image',
        ]);

        $user = User::findOrFail($user);

        auth()->$user->profile->update($data);
        return redirect("/profile/{$user->id}");
    }
}
