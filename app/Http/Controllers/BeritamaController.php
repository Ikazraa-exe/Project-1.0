<?php

namespace App\Http\Controllers;

use App\Models\Beritama;
use Illuminate\Http\Request;

class BeritamaController extends Controller
{
    public function index()
    {
        $beritamas = Beritama::latest()->paginate(6);
        return view('layanan-publik/beritama', [
            'beritamas' => $beritamas,
            'title' => 'Berita Mahkamah Agung',
            'is_single' => false
        ]);
    }

    public function show(Beritama $beritama)
    {
        return view('layanan-publik/beritama', [
            'beritamas' => collect([$beritama]),
            'title' => $beritama->judul,
            'is_single' => true
        ]);
    }
}