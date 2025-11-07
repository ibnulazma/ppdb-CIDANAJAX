<?php

namespace App\Controllers;

use App\Models\ModelPpdb;
use App\Models\ModelSiswa;
use App\Models\ModelWeb;
use App\Models\BannerModel;


class Home extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelPpdb = new ModelPpdb();
        $this->ModelSiswa = new ModelSiswa();
        $this->ModelWeb = new ModelWeb();
        $this->BannerModel = new BannerModel();
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB',
            'subtitle' => 'Home',
            'total_daftar' => $this->ModelPpdb->total_daftar(),
            'rincian' => $this->ModelWeb->Alldata(),
            'banner' => $this->BannerModel->AllData(),

        ];
        return view('v_home', $data);
    }
    public function registrasi()
    {
        $data = [
            'title' => 'SIAKAD INKA'
        ];
        return view('v_registrasi', $data);
    }

    public function infosiswa()
    {
        $cari = $this->request->getVar('cari');
        if ($cari) {
            $orang =  $this->ModelSiswa->search($cari);
        } else {
            $orang = $this->ModelSiswa;
        }


        $data = [
            'title'     => 'PPDB SMP INKA',
            'subtitle'  => 'Home',
            'siswa'     => $orang->paginate(12, 'tbl_daftar'),
            'pager'     => $this->ModelSiswa->pager

        ];
        return view('v_siswa', $data);
    }

    public function logout()
    {
        session()->remove('nama_user');
        session()->remove('email');
        session()->remove('foto');
        session()->remove('level');
        return redirect()->to(base_url('home'));
    }
}
