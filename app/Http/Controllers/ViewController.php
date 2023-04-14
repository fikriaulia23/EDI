<?php

namespace App\Http\Controllers;

use App\Models\BiodataModel;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $model = new BiodataModel();
        $email = auth()->user()->email;
        $data = $model->getLamaran($email);

        return view('dashboard', ['inquiry' => NULL, 'model' => $data]);
    }

    public function dataDiri()
    {
        return view('user.data-diri');
    }

    public function pendidikanTerakhir()
    {
        $model = new BiodataModel();
        $email = auth()->user()->email;
        $data = $model->getLamaran($email);
        return view('user.pendidikan', ['model' => $data]);
    }

    public function pelatihan()
    {
        $model = new BiodataModel();
        $email = auth()->user()->email;
        $data = $model->getLamaran($email);
        return view('user.pelatihan', ['model' => $data]);
    }

    public function pekerjaan()
    {
        $model = new BiodataModel();
        $email = auth()->user()->email;
        $data = $model->getLamaran($email);
        return view('user.pekerjaan', ['model' => $data]);
    }

    public function listPelamar()
    {
        $model = new BiodataModel();
        $data = $model->getAllPelamar();

        return view('admin.list-pelamar', ['inquiry' => NULL, 'model' => $data]);
    }
}
