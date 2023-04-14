<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
    public function getPendidikan($email)
    {
        return DB::table('data_pegawai')
            ->select('data_pendidikan.*')
            ->join('data_pendidikan', 'data_pegawai.nik', '=', 'data_pendidikan.nik')
            ->where('data_pegawai.email', $email)
            ->get();
    }
}
