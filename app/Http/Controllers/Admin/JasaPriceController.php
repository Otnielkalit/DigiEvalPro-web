<?php

namespace App\Http\Controllers\Admin;

use App\Models\JasaPrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class JasaPriceController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'jasa_id' => 'required|integer',
            'durasi_hari' => 'required|integer|min:1',
            'harga' => 'required|integer|min:0',
            'skala_project' => 'required|in:kecil,sedang,besar',
        ]);
        JasaPrice::create([
            'jasa_id' => $request->jasa_id,
            'durasi_hari' => $request->durasi_hari,
            'harga' => $request->harga,
            'skala_project' => $request->skala_project,
        ]);

        Alert::success('Success', 'Detail Harga berhasil ditambahkan');
        return redirect()->back()->with('success', 'Detail harga berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'durasi_hari' => 'required|integer|min:1',
            'harga' => 'required|integer|min:0',
            'skala_project' => 'required|in:kecil,sedang,besar'
        ]);

        $detail = JasaPrice::findOrFail($id);
        $detail->update([
            'durasi_hari' => $request->durasi_hari,
            'harga' => $request->harga,
            'skala_project' => $request->skala_project,
        ]);

        return redirect()->back()->with('success', 'Detail harga diperbarui');
    }

    public function destroy($id)
    {
        $detail = JasaPrice::findOrFail($id);
        $detail->delete();

        return redirect()->back()->with('success', 'Detail harga dihapus');
    }
}
