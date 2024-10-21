<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbpetugas extends Model
{
    use HasFactory;
    protected $table="dbpetugas";
    protected $fillable=['id_petugas','nama_petugas','nik_petugas','tanggallahir_petugas','jeniskelamin_petugas','str_petugas','kategori_petugas','status_petugas'];
    public $timestamps = false;
}
