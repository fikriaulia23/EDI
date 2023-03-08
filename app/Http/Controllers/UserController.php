<?php

namespace App\Http\Controllers;

use App\Models\BiodataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d H:i:s');
        $email = auth()->user()->email;

        $validated = $request->validate([
            'posisi_target' => 'required',
            'nama' => 'required',
            'no_ktp' => 'required',
            't_tgl_lahir' => 'required',
            'j_kelamin' => 'required',
            'agama' => 'required',
            'goldar' => 'required',
            'status' => 'required',
            'alamat_ktp' => 'required',
            'alamat_tgl' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'org_trdekat' => 'required',
            'skill' => 'required',
            'penempatan' => 'required',
            'salary_target' => 'required',
        ]);

        $t_tgl_lahir = addslashes($request->t_tgl_lahir);
        $alamat_ktp = addslashes($request->alamat_ktp);
        $alamat_tgl = addslashes($request->alamat_tgl);
        $skill = addslashes($request->skill);

        DB::beginTransaction();
        try {
            DB::insert('INSERT INTO biodata (posisi_target, nama, no_ktp, t_tgl_lahir, j_kelamin, agama, goldar, status, alamat_ktp, alamat_tgl, email, no_tlp, org_trdekat, skill, penempatan, salary_target, created_at, updated_at, user_email) values (' . "'$request->posisi_target'" . ', ' . "'$request->nama'" . ', ' . $request->no_ktp . ', ' . "'$t_tgl_lahir'" . ', ' . "'$request->j_kelamin'" . ', ' . "'$request->agama'" . ', ' . "'$request->goldar'" . ', ' . "'$request->status'" . ', ' . "'$alamat_ktp'" . ', ' . "'$alamat_tgl'" . ', ' . "'$request->email'" . ', ' . $request->no_tlp . ', ' . "'$request->org_trdekat'" . ', ' . "'$skill'" . ', ' . "'$request->penempatan'" . ', ' . $request->salary_target . ', ' . "'$date'" . ', ' . "'$date'" . ', ' . "'$email'" . ')');

            DB::commit();

            return redirect('/');
        } catch (\Throwable $th) {

            DB::rollback();
            return redirect('/data-diri');
        }
    }

    public function deleteLamaran(Request $request)
    {
        DB::table('biodata')->where('id', $request->id)->delete();
        return redirect('/');
    }

    public function detailLamaran($id)
    {
        $model = new BiodataModel();
        $email = auth()->user()->email;
        $data = $model->getLamaran($email);
        $inquiry = $model->getDetail($id);
        $inquiryPendidikan = $model->getDetailPendidikan($id);
        $inquiryPelatihan = $model->getDetailPelatihan($id);
        $inquiryPekerjaan = $model->getDetailPekerjaan($id);

        return view('dashboard', ['inquiryPekerjaan' => $inquiryPekerjaan, 'inquiryPelatihan' => $inquiryPelatihan, 'inquiryPendidikan' => $inquiryPendidikan, 'inquiry' => $inquiry, 'model' => $data]);
    }
}
