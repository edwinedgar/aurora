<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modellayanan extends Model
{
    use HasFactory;
    protected $table="dblayanan";
    protected $fillable=['kode_layanan','kategori_layanan','jenis_layanan','tarif_layanan'];
    public $timestamps = false;
}
