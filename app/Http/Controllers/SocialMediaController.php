<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;

class SocialMediaController extends Controller
{

    public function index()
    {
        $socialMedia = SocialMedia::latest()->paginate(6);
        return view('layanan-publik/social-media', [
            'socialMedia' => $socialMedia,
            'title' => 'Media Sosial'
        ]);
    }
}