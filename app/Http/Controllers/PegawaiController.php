<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($kategori)
    {
        $kategori = str_replace('-', ' ', $kategori); 
        $kategori = ucwords($kategori); 
    
        $pegawai = Pegawai::where('kategori_pegawai', $kategori)->get();
        
        return view('tentang-pengadilan/data-pegawai', [
            'pegawai' => $pegawai,
            'title' => $kategori,
            'kategori' => $kategori
        ]);
    }
}