<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $fillable = ['merk', 'nopol', 'thn_beli', 'deskripsi', 'kapasitas_kursi', 'jenis_kendaraan_id'];

    public $timestamps = false;

    public function jenis(){
        return $this->belongsTo(Jenis::class, 'jenis_kendaraan_id');
    }
}

