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

    public function getData($id)
    {
        return DB::table('biodata as b')
            ->where('b.id', $id)
            ->get();
    }

    public function getDetailPelamar($id)
    {
        return DB::table('biodata as b')
            ->where('b.id', $id)
            ->get();
    }

    public function getPekerjaan($id)
    {
        return DB::table('pekerjaan as p')
            ->where('p.id_biodata', $id)
            ->get();
    }

    public function getPendidikan($id)
    {
        return DB::table('pendidikan as p')
            ->where('p.id_biodata', $id)
            ->get();
    }

    public function getPelatihan($id)
    {
        return DB::table('pelatihan as p')
            ->where('p.id_biodata', $id)
            ->get();
    }

    public function getAllPelamar()
    {
        return DB::table('biodata')->get();
    }

    public function getLamaran($email)
    {
        return DB::table('biodata')
            ->where('email', $email)
            ->get();
    }

    public function getDetail($id)
    {
        return DB::table('biodata')
            ->where('id', $id)
            ->get();
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
