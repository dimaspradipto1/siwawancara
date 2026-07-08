<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index()
    {
        return view('banner.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ], [
            'banner.required' => 'Gambar banner wajib diisi.',
            'banner.image' => 'File yang diupload harus berupa gambar.',
            'banner.mimes' => 'Format gambar harus jpeg, png, jpg, atau webp.',
            'banner.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $filename = 'header.png';
            $destinationPath = public_path('assets/img');

            // Hapus file lama jika ada (walaupun biasanya langsung tertimpa)
            if (File::exists($destinationPath . '/' . $filename)) {
                File::delete($destinationPath . '/' . $filename);
            }

            // Simpan file baru
            $file->move($destinationPath, $filename);

            return redirect()->back()->with('success', 'Banner berhasil diperbarui!');
        }

        return redirect()->back()->with('error', 'Gagal memperbarui banner.');
    }
}
