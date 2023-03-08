<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BiodataModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'posisi_target',
        'nama',
        'no_ktp',
        't_tgl_lahir',
        'j_kelamin',
        'agama',
        'goldar',
        'status',
        'alamat_ktp',
        'alamat_tgl',
        'email',
        'no_tlp',
        'org_trdekat',
        'penempatan',
        'salary_target'
    ];

    public function getAllPelamar()
    {
        return DB::table('biodata')->get();
    }

    public function getLamaran($email)
    {
        return DB::table('biodata')
            ->where('user_email', $email)
            ->get();
    }

    public function getDetail($id)
    {
        return DB::table('biodata')
            ->where('id', $id)
            ->get();
        // return DB::select("SELECT posisi_target, nama, no_ktp, t_tgl_lahir, j_kelamin, agama, goldar, status, alamat_ktp, alamat_tgl, email, no_tlp, org_trdekat, skill, penempatan, salary_target FROM biodata WHERE id = $id");
    }

    public function getDetailPendidikan($id)
    {
        return DB::table('pendidikan')
            ->where('id_biodata', $id)
            ->get();
    }

    public function getDetailPelatihan($id)
    {
        return DB::table('pelatihan')
            ->where('id_biodata', $id)
            ->get();
    }

    public function getDetailPekerjaan($id)
    {
        return DB::table('pekerjaan')
            ->where('id_biodata', $id)
            ->get();
    }
}
