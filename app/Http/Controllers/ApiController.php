<?php

namespace App\Http\Controllers;

use App\Models\BiodataModel;
use App\Models\User;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use http\Env\Response;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function greeting()
    {
        $data = 'Hallo, welcome to the club!';

        return response()->json(['message' => $data], 200);
    }

    public function allUser()
    {
        $model = new User();
        $data = $model->getAllUser();

        return response()->json(['message' => $data], 200);
    }

    public function detailUser()
    {
        $email = $_GET['email'];
        $model = new User();
        $data = $model->getDetailUser($email);

        if (count($data) < 1) {
            return response()->json(['message' => 'Not Found!'], 404);
        }

        return response()->json(['message' => $data], 200);
    }


    public function detailLamaran()
    {
        $id = $_GET['id_lamaran'];
        $model = new BiodataModel();
        // $inquiry = BiodataModel
        $inquiry = $model->getDetailPelamar($id);
        // $inquiryPekerjaan = $model->getPekerjaan($id);
        // $inquiryPendidikan = $model->getPendidikan($id);
        // $inquiry[0]->pekerjaan = $inquiryPekerjaan;
        // $inquiry[0]->pendidikan = $inquiryPendidikan;
        foreach ($inquiry as $d) {
            $d->pekerjaan = $model->getPekerjaan($d->id);
            $d->pendidikan = $model->getPendidikan($d->id);
            $d->pelatihan = $model->getPelatihan($d->id);
        }

        if (count($inquiry) < 1) {
            return response()->json(['message' => 'Not Found!'], 404);
        }

        return response()->json(['message' => $inquiry], 200);
    }


    public function createBiodata(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'posisi_target' => 'required',
            'nama' => 'required',
            'no_ktp' => 'required|int',
            't_tgl_lahir' => 'required',
            'j_kelamin' => 'required',
            'agama' => 'required',
            'goldar' => 'required',
            'status' => 'required',
            'alamat_ktp' => 'required',
            'alamat_tgl' => 'required',
            'no_tlp' => 'required|int',
            'org_terdekat' => 'required',
            'skill' => 'required',
            'penempatan' => 'required',
            'salary_target' => 'required|int'
        ]);

        $email = $request->email;
        $posisi_target = $request->posisi_target;
        $nama = $request->nama;
        $no_ktp = $request->no_ktp;
        $t_tgl_lahir = addslashes($request->t_tgl_lahir);
        $j_kelamin = addslashes($request->j_kelamin);
        $agama = $request->agama;
        $goldar = $request->goldar;
        $status = $request->status;
        $alamat_ktp = $request->alamat_ktp;
        $alamat_tgl = $request->alamat_tgl;
        $no_tlp = $request->no_tlp;
        $org_trdekat = $request->org_terdekat;
        $skill = addslashes($request->skill);
        $penempatan = $request->penempatan;
        $salary_target = $request->salary_target;

        if ($penempatan == 'true') {
            $penempatan = 'YA';
        } else if ($penempatan == 'false') {
            $penempatan = 'TIDAK';
        }
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        DB::beginTransaction();
        try {

            DB::insert("INSERT INTO biodata (email, posisi_target, nama, no_ktp, t_tgl_lahir, j_kelamin, agama, goldar, status, alamat_ktp, alamat_tgl, no_tlp, org_trdekat, skill, penempatan, salary_target, created_at) values ('$email', '$posisi_target', '$nama', $no_ktp, '$t_tgl_lahir', '$j_kelamin', '$agama', '$goldar', '$status', '$alamat_ktp', '$alamat_tgl', $no_tlp, '$org_trdekat', '$skill', '$penempatan', $salary_target, '$now')");

            DB::commit();
        } catch (\Exception  $e) {
            DB::rollback();
            $res = ['error' => $e->getMessage()];
            return response()->json(['message' => $res], 203);
        }

        return response()->json(['message' => 'Sukses tambah data'], 200);
    }


    public function updateBiodata(Request $request)
    {
        $this->validate($request, [
            'no_ktp' => 'required|int',
            'nama' => 'required',
            't_tgl_lahir' => 'required',
            'j_kelamin' => 'required',
            'agama' => 'required',
            'goldar' => 'required',
            'status' => 'required',
            'alamat_ktp' => 'required',
            'alamat_tgl' => 'required',
            'no_tlp' => 'required|int',
            'org_terdekat' => 'required',
            'skill' => 'required',
            'penempatan' => 'required',
            'salary_target' => 'required|int'
        ]);

        $no_ktp = $request->no_ktp;
        $nama = $request->nama;
        $t_tgl_lahir = addslashes($request->t_tgl_lahir);
        $j_kelamin = addslashes($request->j_kelamin);
        $agama = $request->agama;
        $goldar = $request->goldar;
        $status = $request->status;
        $alamat_ktp = $request->alamat_ktp;
        $alamat_tgl = $request->alamat_tgl;
        $no_tlp = $request->no_tlp;
        $org_trdekat = $request->org_terdekat;
        $skill = addslashes($request->skill);
        $penempatan = $request->penempatan;
        $salary_target = $request->salary_target;

        if ($penempatan == 'true') {
            $penempatan = 'YA';
        } else if ($penempatan == 'false') {
            $penempatan = 'TIDAK';
        }
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        DB::beginTransaction();
        try {

            DB::update("UPDATE biodata SET nama = '$nama' , t_tgl_lahir = '$t_tgl_lahir' , j_kelamin = '$j_kelamin' , agama = '$agama' , goldar = '$goldar' , status = '$status' , alamat_ktp = '$alamat_ktp' , alamat_tgl = '$alamat_tgl', no_tlp = $no_tlp, org_trdekat = '$org_trdekat' , skill = '$skill' , penempatan = '$penempatan' , salary_target = $salary_target, updated_at = '$now' WHERE no_ktp = $no_ktp");

            DB::commit();
        } catch (\Exception  $e) {
            DB::rollback();
            $res = ['error' => $e->getMessage()];
            return response()->json(['message' => $res], 200);
        }

        return response()->json(['message' => 'Sukses update data'], 200);
    }

    public function deleteBiodata()
    {
        $id_lamaran = $_GET['id_lamaran'];
        $posisi_target = $_GET['posisi_target'];

        DB::beginTransaction();
        try {

            DB::delete("DELETE FROM biodata WHERE id = $id_lamaran AND posisi_target = '$posisi_target'");
            DB::delete("DELETE FROM pekerjaan WHERE id_biodata = $id_lamaran");
            DB::delete("DELETE FROM pendidikan WHERE id_biodata = $id_lamaran");
            DB::delete("DELETE FROM pelatihan WHERE id_biodata = $id_lamaran");

            DB::commit();
        } catch (\Exception  $e) {
            DB::rollback();
            $res = ['error' => $e->getMessage()];
            return response()->json(['message' => $res], 203);
        }

        return response()->json(['message' => 'Sukses delete data'], 200);
    }
}
