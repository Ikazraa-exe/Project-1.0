<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumumen = Pengumuman::latest()->paginate(6);
        return view('layanan-publik/pengumuman', [
            'pengumumen' => $pengumumen,
            'title' => 'Pengumuman',
            'is_single' => false
        ]);
    }

    public function show(Pengumuman $pengumuman)
    {
        return view('layanan-publik/pengumuman', [
            'pengumumen' => collect([$pengumuman]),
            'title' => $pengumuman->judul,
            'is_single' => true
        ]);
    }
}