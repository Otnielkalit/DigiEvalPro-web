<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasaPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'jasa_id',
        'durasi_hari',
        'harga',
        'skala_project',
    ];
}
