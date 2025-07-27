<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'klinik_id',
        'nama',
        'no_ktp',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
    ];

    public function klinik()
    {
        return $this->belongsTo(Klinik::class);
    }
}

