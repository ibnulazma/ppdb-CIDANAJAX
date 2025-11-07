<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelFormulir;
use App\Models\ModelTa;

class Daftar extends BaseController
{

    public function __construct()
    {
        helper('form');
        helper('gantiformat');
        helper('formatindo');
        $this->ModelFormulir    = new ModelFormulir();
        $this->ModelTa    = new ModelTa();
    }
    public function index()
    {
        $no_pendaftaran = $this->ModelFormulir->noPendaftaran();
        $data = [
            'title'             => 'Formulir',
            'subtitle'          => 'Formulir Insan Kamil',
            'menu'              => 'formulir',
            'submenu'           => 'formulir',
            'formulir'           => $this->ModelFormulir->AllData(),
            'ta'            => $this->ModelTa->tahun(),
            'kode' => $no_pendaftaran
        ];
        return view('daftar', $data);
    }

    public function add()
    {
        $data = [
            'kode_pendaftaran'      => $this->request->getPost('kode_pendaftaran'),
            'nama_siswa'            => $this->request->getPost('nama_siswa'),
            'alamat'                => $this->request->getPost('alamat'),
            'orangtua'              => $this->request->getPost('orangtua'),
            'no_telp'               => $this->request->getPost('no_telp'),
            'tanggal'               => $this->request->getPost('tanggal'),
            'id_ta'                 => $this->request->getPost('id_ta'),


        ];
        $this->ModelFormulir->add($data);
        session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
        return redirect()->to('formulir');
    }
}
