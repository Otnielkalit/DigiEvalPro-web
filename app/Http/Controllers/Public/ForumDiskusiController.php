<?php

namespace App\Http\Controllers\Public;

use App\Models\ForumDiskusi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class ForumDiskusiController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Request data:', $request->all());

        try {
            // Validasi input
            $validatedData = $request->validate([
                'isi' => 'required|string',
                'user_id' => 'required|exists:users,id',
                'jasa_id' => 'required|exists:jasas,id',
            ]);

            Log::info('Validated data:', $validatedData);

            $forum = ForumDiskusi::create([
                'isi' => $request->isi,
                'jasa_id' => $request->jasa_id,
                'user_id' => $request->user_id,
                'parent_id' => $request->parent_id ?? null,
            ]);

            Log::info('Forum created:', ['id' => $forum->id]);

            Alert::success('Success', 'Komentar berhasil ditambahkan!');
            return back();
        } catch (\Exception $e) {
            Log::error('Error creating forum post:', ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            Alert::error('Error', 'Terjadi kesalahan: ' . $e->getMessage());
            return redirect()->back()->withInput();
        }
    }
}
