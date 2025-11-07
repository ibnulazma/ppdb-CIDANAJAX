<?php

namespace App\Controllers;

use App\Models\ModelPpdb;
use App\Models\ModelTa;
use App\Models\ModelSekolah;
use App\Models\ModelJenjang;
use App\Models\ModelUser;
use Ifsnop\Mysqldump\Mysqldump;

class Admin extends BaseController
{


    public function __construct()
    {
        helper('gantiformat');
        helper('formatindo');
        helper('form');
        $this->ModelPpdb    = new ModelPpdb();
        $this->ModelTa      = new ModelTa();
        $this->ModelSekolah = new ModelSekolah();
        $this->ModelJenjang = new ModelJenjang();
        $this->ModelUser = new ModelUser();
    }


    public function index()
    {
        session();

        $data = [
            'title'             => 'SPMB',
            'subtitle'          => 'Beranda',
            'menu'              => 'admin',
            'submenu'           => 'admin',
            'jumlahTotal'       => $this->ModelPpdb->jumlahTotal(),
            'jumlahLaki'        => $this->ModelPpdb->jumlahLaki(),
            'jumlahPerempuan'   => $this->ModelPpdb->jumlahPerempuan(),
            'jumlahSD'          => $this->ModelPpdb->jumlahSD(),
            'jumlahMI'          => $this->ModelPpdb->jumlahMI(),
            'datasekolah'       => $this->ModelPpdb->group_by(),
            'datatahun'         => $this->ModelTa->group_tahun(),
            'tahun'             => $this->ModelTa->AllData(),
            // 'sekolah'          => $this->ModelPpdb->group(),
        ];

        return view('admin/dashboard', $data);
    }


    public function user()
    {


        $data = [
            'title'             => 'SPMB',
            'subtitle'          => 'PPDB',
            'menu'              => 'user',
            'submenu'           => 'user',
            'user'              => $this->ModelUser->AllData()
        ];

        return view('admin/user', $data);
    }





    public function ubahlevel($id_user)
    {
        $data = [
            'id_user' => $id_user,
            'level' => $this->request->getPost('level'),
        ];
        $this->ModelUser->edit($data);
        session()->setFlashdata('tambah', 'Status Tahun Ajaran Berhasil Diganti !!!');
        return redirect()->to(base_url('admin/user'));
    }
    public function statusAktif($id_user)
    {
        $data = [
            'id_user' => $id_user,
            'status_aktif' => 1
        ];
        $this->ModelUser->edit($data);
        session()->setFlashdata('pesan', 'Status Tahun Ajaran Berhasil Diganti !!!');
        return redirect()->to(base_url('admin/user'));
    }

    public function statusNonAktif($id_user)
    {
        $data = [
            'id_user' => $id_user,
            'status_aktif' => 0
        ];
        $this->ModelUser->edit($data);
        session()->setFlashdata('pesan', 'Status Aktif !!!');
        return redirect()->to(base_url('admin/user'));
    }
}
