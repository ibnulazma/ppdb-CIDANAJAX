<?php

namespace App\Controllers;

use App\Models\ModelWeb;
use App\Models\BannerModel;


class Web extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->ModelWeb = new ModelWeb();
        $this->BannerModel = new BannerModel();
    }

    public function index()
    {
        session();


        $data = [
            'title' => 'PPDB INKA',
            'subtitle' => 'Rincian Biaya',
            'menu' => 'web',
            'submenu' => 'Rincian Biaya',
            'rincian' => $this->ModelWeb->Alldata()

        ];

        return view('web/rincian', $data);
    }




    public function tambahdata()
    {
        session();
        $db     = \Config\Database::connect();


        $ta = $db->table('tbl_ta')
            ->where('status', '1')
            ->get()->getRowArray();

        $data = [
            'keterangan'    => $this->request->getPost('keterangan'),
            'periode'       => $this->request->getPost('periode'),
            'rincian'       => $this->request->getPost('rincian'),
            'warna'         => $this->request->getPost('warna'),
            'id_ta' => $ta['id_ta'],
        ];
        $this->ModelWeb->add($data);
        session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
        return redirect()->to('web');
    }

    public function detail($id_rincian)
    {
        $model = new ModelWeb();
        $data['user'] = $model->find($id_rincian);
        $data['menu'] = 'web';
        $data['submenu'] = 'Edit Rincian Biaya';
        $data['title'] = 'PPDB INKA';
        $data['subtitle'] = 'Edit Rincian Biaya';
        return view('web/edit', $data);
    }

    public function update()
    {
        $model = new ModelWeb();
        $id = $this->request->getPost('id_rincian');
        $data = [
            'keterangan' => $this->request->getPost('keterangan'),
            'periode' => $this->request->getPost('periode'),
            'warna' => $this->request->getPost('warna'),
            'rincian' => $this->request->getPost('rincian'),
            // Tambahkan field lain sesuai kebutuhan
        ];

        $model->update($id, $data);
        return redirect()->to('web'); // Ganti dengan URL yang sesuai
    }



    public function tambah()
    {
        session();


        $data = [
            'title' => 'PPDB INKA',
            'subtitle' => 'Rincian Biaya',
            'menu' => 'web',
            'submenu' => 'Tambah Rincian',


        ];

        return view('web/tambah', $data);
    }


    public function banner()
    {


        $data = [
            'title' => 'PPDB',
            'subtitle' => 'Banner',
            'menu'  => 'Web',
            'submenu' => 'Banner',
            'banner' => $this->BannerModel->AllData(),
            'validation'    =>  \Config\Services::validation(),

        ];

        return view('web/banner', $data);
    }

    public function add()
    { {
            if ($this->validate([

                'foto' => [
                    'label' => 'Foto',
                    'rules' => 'uploaded[foto]|max_size[foto,2024]|mime_in[foto,image/png,image/jpg,image/gif,image/jpeg,image/ico]',
                    'errors' => [
                        'uploaded' => '{field} Wajib Di Isi !!!!',
                        'max_size' => '{field} Max 2024 KB !!!!',
                        'mime_in' => 'Format {field} Harus PNG, JPG, JPEG, GIF, ICO !!!!'
                    ]
                ],
            ])) {

                //masukan foto ke input
                $foto = $this->request->getFile('foto');

                //merename 
                $nama_file = $foto->getRandomName();
                //jika valid

                $data = array(
                    'foto'      => $nama_file,
                );

                $foto->move('foto', $nama_file);
                $this->BannerModel->add($data);
                session()->setFlashdata('pesan', 'User Berhasil Ditambah !!!');
                return redirect()->to(base_url('web/banner'));
            } else {
                session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
                return redirect()->to(base_url('web/banner'));
            }
        }
    }
}
