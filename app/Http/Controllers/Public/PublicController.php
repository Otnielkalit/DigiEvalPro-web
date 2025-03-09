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

    public function about()
    {
        return view('public.pages.about', [
            'title' => 'About DigiEval Pro'
        ]);
    }

    public function contact()
    {
        return view('public.pages.contact', [
            'title' => 'Contact DigiEval Pro'
        ]);
    }

    public function service()
    {
        return view('public.pages.service', [
            'title' => 'Service DigiEval Pro'
        ]);
    }
}
