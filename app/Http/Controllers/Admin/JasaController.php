<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jasa;
use App\Models\JasaPrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jasa = Jasa::all();
        return view('admin.pages.jasa.index', [
            'title' => 'List Jasa',
            'jasa' => $jasa
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
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan gambar di direktori gambar_jasa
        $gambarPath = $request->file('gambar')->store('gambar_jasa', 'public');

        try {
            $jasa = new Jasa();
            $jasa->nama = $request->nama;
            $jasa->deskripsi = $request->deskripsi;
            $jasa->harga = $request->harga;
            $jasa->gambar = $gambarPath;
            $jasa->user_id = auth()->id();
            $jasa->save();

            Alert::success('Success', 'Jasa berhasil ditambahkan');
            return redirect()->route('jasa.index');
        } catch (\Exception $e) {
            Storage::disk('public')->delete($gambarPath);
            Alert::error('Error', 'Gagal menyimpan jasa: ' . $e->getMessage());
            return redirect()->back();
        }
    }


    /*
     * Display the specified resource.
     */
    public function show($id)
    {
        $jasa = Jasa::findOrFail($id);
        $hargaDetails = JasaPrice::where('jasa_id', $id)->orderBy('durasi_hari')->get();
        return view('admin.pages.jasa.detail', [
            'title' => "Detail Jasa - " . ucfirst($jasa->nama),
            'jasa' => $jasa,
            'hargaDetails' => $hargaDetails
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */ public function edit($id)
    {
        $hargaDetails = JasaPrice::where('jasa_id', $id)->orderBy('durasi_hari')->get();
        $jasa = Jasa::findOrFail($id);
        return view('admin.pages.jasa.edit', [
            'title' => 'Edit Jasa',
            'jasa' => $jasa,
            'hargaDetails' => $hargaDetails
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $jasa = Jasa::findOrFail($id);
        $jasa->nama = $request->nama;
        $jasa->harga = $request->harga;
        $jasa->deskripsi = $request->deskripsi;

        // Jika ada file gambar baru diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($jasa->gambar && Storage::exists('public/' . $jasa->gambar)) {
                Storage::delete('public/' . $jasa->gambar);
            }

            // Simpan gambar baru
            $gambarPath = $request->file('gambar')->store('jasas', 'public');
            $jasa->gambar = $gambarPath;
        }

        $jasa->save();
        Alert::success('Success', 'Jasa berhasil ditedit');
        return redirect()->route('jasa.index')->with('success', 'Jasa berhasil diperbarui!');
    }


    /**a
     * Remove the specified resource from storage.
     */
    public function destroy(Jasa $jasa)
    {
        //
    }
}
