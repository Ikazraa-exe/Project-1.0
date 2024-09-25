<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::latest()->paginate(6);
        return view('layanan-publik/berita', [
            'beritas' => $beritas,
            'title' => 'Berita',
            'is_single' => false
        ]);
    }

    public function show(Berita $berita)
    {
        return view('layanan-publik/berita', [
            'beritas' => collect([$berita]),
            'title' => $berita->judul, // Menggunakan judul berita sebagai title
            'is_single' => true
        ]);
    }
}
