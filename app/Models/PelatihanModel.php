<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PelatihanModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_biodata',
        'nm_kursus',
        'sertifikat',
        'tahun'
    ];
}
