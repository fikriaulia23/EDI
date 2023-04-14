<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProfileModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nik',
        'nama',
        'jekel',
        'kd_pangkat',
        'kd_jabatan',
        'email'
    ];

    public function getProfile($email)
    {
        return DB::table('data_pegawai')
            ->select('data_pegawai.nik', 'data_pegawai.nama', 'data_pegawai.jekel', 'pangkat.nm_pangkat', 'jabatan.nm_jabatan', 'data_pendidikan.pendidikan_terakhir')
            ->join('data_pendidikan', 'data_pegawai.nik', '=', 'data_pendidikan.nik')
            ->leftJoin('pangkat', 'data_pegawai.kd_pangkat', '=', 'pangkat.kd_pangkat')
            ->leftJoin('jabatan', 'data_pegawai.kd_jabatan', '=', 'jabatan.kd_jabatan')
            ->where('data_pegawai.email', $email)
            ->get();
    }
}
