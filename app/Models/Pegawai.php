<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
        'nrp',
        'pangkat_dan_golongan',
        'tempat_tanggal_lahir',
        'agama',
        'lhkpn_asn',
        'posisi',
        'kategori_pegawai',
        'foto',
        'pendidikan'
    ];
    
    protected $casts = [
        'pendidikan' => 'array',
    ];
}
