<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // app/Http/Controllers/ProfileController.php
    public function show(User $user)
    {
        return view('public.pages.profile-show',[
            'user' => $user,
            'title' => 'Profile',
        ]);
    }
}
