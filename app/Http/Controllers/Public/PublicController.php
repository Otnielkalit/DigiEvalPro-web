<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('public.pages.welcome', [
            'title' => 'Selamat Datang di DigiEval Pro'
        ]);
    }
}
