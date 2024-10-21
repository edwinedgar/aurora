<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbdaftar extends Model
{
    use HasFactory;
    protected $table="dbdaftar";
    protected $fillable=['nik_pasien','nama_pasien','tanggallahir_pasien','jeniskelamin_pasien','nomorhp_pasien','layanan_pasien','keluhan_pasien','tarif_pasien','alamat_pasien','statuspembayaran_pasien','id_petugas'];
    public $timestamps = false;
}
