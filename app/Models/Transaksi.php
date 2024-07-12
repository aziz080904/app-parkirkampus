<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = ['kendaraan_id', 'area_parkir_id', 'tanggal', 'mulai', 'akhir', 'biaya'];

     //disable created_at and updated_at field
     public $timestamps = false;

     public function kendaraan(){
         return $this->belongsTo(Kendaraan::class, 'kendaraan_id'); //belongsTo -> one to many
     }

     public function area_parkir(){
        return $this->belongsTo(Area_parkir::class, 'area_parkir_id'); //belongsTo -> one to many
    }
}
