<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    // Menampilkan form unggah gambar
    public function create()
    {
        return view('imageUpload');  // Menampilkan halaman upload gambar
    }

    // Menangani proses unggah gambar
    public function store(Request $request)
    {
        // Validasi file gambar
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi ukuran dan jenis file
        ]);

        // Cek apakah file gambar ada
        if ($request->hasFile('image')) {
            // Ambil file gambar
            $image = $request->file('image');

            // Menyimpan gambar ke folder 'images' di public disk
            $path = $image->store('images', 'public');  // 'public' berarti menggunakan disk 'public' dari config/filesystems.php

            // Menyimpan nama file gambar ke session untuk ditampilkan
            return back()->with('success', 'Gambar berhasil diunggah')->with('image', $path);
        }

        // Jika gambar tidak ada
        return back()->with('error', 'Silakan pilih gambar terlebih dahulu');
    }
}
