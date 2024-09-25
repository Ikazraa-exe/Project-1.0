<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Beritama;
use App\Models\Pengumuman;
use App\Models\SocialMedia;

class BerandaController extends Controller
{
    public function index()
    {
        $pengumumen = Pengumuman::latest()->take(3)->get();
        $beritas = Berita::latest()->take(3)->get(); //
        $beritamas = Beritama::latest()->take(3)->get();
        $socialMedia = SocialMedia::latest()->take(3)->get();
        $title = 'Beranda';

        return view('index', compact('beritas', 'beritamas', 'pengumumen', 'socialMedia', 'title'));
    }
}
