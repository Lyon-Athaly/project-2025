<?php

namespace App\Models;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
     protected $fillable = ['nama', 'alamat', 'telepon'];

    public function pasiens()
    {
        return $this->hasMany(Pasien::class);
    }
}
