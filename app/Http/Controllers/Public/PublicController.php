<?php

namespace App\Http\Controllers\Public;

use App\Models\Jasa;
use App\Models\ForumDiskusi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function welcome()
    {
        $jasa = Jasa::all()->slice(0, 4);
        return view('public.pages.welcome', [
            'title' => 'Selamat Datang di DigiEval Pro',
            'jasas' => $jasa
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
        $jasas = Jasa::paginate(3);
        return view('public.pages.service', [
            'title' => 'Service DigiEval Pro',
            'jasas' => $jasas
        ]);
    }

    public function detailService($id)
    {
        $jasa = Jasa::findOrFail($id);
        $diskusi = ForumDiskusi::where('jasa_id', $id)
                ->whereNull('parent_id') // Hanya ambil diskusi utama (bukan balasan)
                ->with(['user', 'replies.user']) // Load relasi user dan balasan
                ->orderBy('created_at', 'desc') // Urutkan dari yang terbaru
                ->get();
        return view('public.pages.detail-service', [
            'title' => 'Detail Service DigiEval Pro',
            'jasa' => $jasa,
            'diskusi' => $diskusi
        ]);
    }
}
