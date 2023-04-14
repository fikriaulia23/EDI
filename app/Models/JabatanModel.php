<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class JabatanModel extends Model
{
    use HasFactory;


    public function getJabatan($email)
    {
        return DB::table('data_pegawai')
            ->select('jabatan.*')
            ->join('jabatan', 'data_pegawai.kd_jabatan', '=', 'jabatan.kd_jabatan')
            ->where('data_pegawai.email', $email)
            ->get();
    }
}
