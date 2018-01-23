<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $profile;
    private $user;

    function __construct(Profile $profile, User $user)
    {
        $this->profile = $profile;
        $this->user = $user;
    }

    public function show($username)
    {
        $user = User::where('name', $username)->first();

        return view('profiles.user-profile', compact('user'));
    }

    public function edit($username)
    {
        dd($username);
        $user = User::where('name', $username)->first();
    }
}
