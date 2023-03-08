<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendidikanModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_biodata',
        'pendidikan_terakhir',
        'nm_institusi',
        'jurusan',
        'th_lulus',
        'ipk'
    ];
}
