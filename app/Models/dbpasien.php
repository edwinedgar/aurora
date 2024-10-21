<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dbpasien extends Model
{
    use HasFactory;
    protected $table="dbpasien";
    protected $fillable=['id_user','nama_pasien','nik_pasien','tanggal_lahir','nomor_hp','jenis_kelamin'];
    public $timestamps = false;
}
