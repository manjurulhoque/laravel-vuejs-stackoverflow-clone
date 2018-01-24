<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileEditRequest;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class ProfileController extends Controller
{
    private $profile;
    private $user;

    function __construct(Profile $profile, User $user)
    {
        $this->profile = $profile;
        $this->user = $user;
    }

    public function index()
    {
        $myString = "9,admin@example.com,8";
        $myArray = explode(',', $myString);
        print_r($myArray);
    }

    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();

        return view('profiles.user-profile', compact('user'));
    }

    public function edit($username)
    {
        $user = User::where('name', $username)->first();

        return view('profiles.profile-edit', compact('user'));
    }

    public function update(ProfileEditRequest $request, $username)
    {
        $user = $this->user::where('name', $username)->first();

        if ($request->file('cover')) {
            $image = $request->file('cover');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/covers/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $user->profile()->update([
                'image' => 'images/covers/'.$filename,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_id' => Auth::id(),
                'skills' => $request->skills
            ]);
        } else {
            $user->profile()->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'user_id' => Auth::id(),
                'skills' => $request->skills
            ]);
        }

        return redirect()->back();
    }
}
