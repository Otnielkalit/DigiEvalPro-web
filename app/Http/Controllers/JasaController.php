<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.jasa.index', [
            'title' => 'List Jasa'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.jasa.create', [
            'title' => 'Buat Jasa',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($nama)
    {
        $title = "Detail Jasa - " . ucfirst(str_replace('-', ' ', $nama));
        
        return view('admin.pages.jasa.detail', compact('title', 'nama'));
    }  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('admin.pages.jasa.edit', [
            'title' => 'Edit Jasa',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jasa $jasa)
    {
        //
    }

    /**a
     * Remove the specified resource from storage.
     */
    public function destroy(Jasa $jasa)
    {
        //
    }
}
