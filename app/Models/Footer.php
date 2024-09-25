<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'facebook',
        'instagram',
        'youtube',
        'phone_fax',
        'address',
        'whatsapp',
        'working_hours',
        'google_maps_embed',
    ];

    protected $casts = [
        'google_maps_embed' => 'string',
    ];
}