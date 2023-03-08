<?php

namespace App\Http\Controllers;

use App\Models\BiodataModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function deleteLamaran(Request $request)
    {
        DB::table('biodata')->where('id', $request->id)->delete();
        return redirect('/');
    }

    public function detailLamaran($id)
    {
        $model = new BiodataModel();
        $data = $model->getAllPelamar();
        $inquiry = $model->getDetail($id);
        $inquiryPendidikan = $model->getDetailPendidikan($id);
        $inquiryPelatihan = $model->getDetailPelatihan($id);
        $inquiryPekerjaan = $model->getDetailPekerjaan($id);

        return view('admin.list-pelamar', ['inquiryPekerjaan' => $inquiryPekerjaan, 'inquiryPelatihan' => $inquiryPelatihan, 'inquiryPendidikan' => $inquiryPendidikan, 'inquiry' => $inquiry, 'model' => $data]);
    }
}
