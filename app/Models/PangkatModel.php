<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PangkatModel extends Model
{
    use HasFactory;

    public function getPangkat($email)
    {
        return DB::table('data_pegawai')
            ->select('pangkat.*')
            ->join('pangkat', 'data_pegawai.kd_pangkat', '=', 'pangkat.kd_pangkat')
            ->where('data_pegawai.email', $email)
            ->get();
    }
}
