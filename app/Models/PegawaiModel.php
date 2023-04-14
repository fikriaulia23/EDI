<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PegawaiModel extends Model
{
    use HasFactory;

    public function getDataPegawai($email)
    {
        return DB::table('data_pegawai')
            ->where('data_pegawai.email', $email)
            ->get();
    }
}
