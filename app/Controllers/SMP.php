<?php

namespace App\Controllers;

use App\Models\ModelPpdb;
use App\Models\ModelTa;
use App\Models\ModelSekolah;
use App\Models\ModelJenjang;
use App\Models\Siswaformulir;
use \Dompdf\Dompdf;
use Dompdf\Options;

class SMP extends BaseController
{


    public function __construct()
    {
        helper('form');
        helper('gantiformat');
        helper('formatindo');
        helper('form');
        $this->ModelPpdb    = new ModelPpdb();
        $this->ModelTa      = new ModelTa();
        $this->ModelSekolah = new ModelSekolah();
        $this->ModelJenjang = new ModelJenjang();
        $this->Siswaformulir = new Siswaformulir();
    }

    public function index()
    {
        session();

        $data = [
            'title'         => 'PPDB',
            'subtitle'      => 'PPDB',
            'menu'              => 'smp',
            'submenu'           => 'smp',
            'ppdb'          => $this->ModelPpdb->AllData(),
            'sekolah'       => $this->ModelSekolah->AllData(),
            'ta'            => $this->ModelTa->statusTa(),
            'jenjang'       => $this->ModelJenjang->AllData(),

        ];
        return view('smp/v_index', $data);
    }

    public function cetak()
    {
        session();

        $data = [
            'title'         => 'PPDB',
            'subtitle'      => 'PPDB',
            'ppdb'          => $this->ModelPpdb->AllData(),
            'sekolah'       => $this->ModelSekolah->AllData(),
            'ta'            => $this->ModelTa->statusTa(),
            'jenjang'       => $this->ModelJenjang->AllData(),
        ];
        return view('ppdb/v_cetak', $data);
    }

    public function berandaPPDB()
    {
        session();

        $data = [
            'title'             => 'PPDB',
            'subtitle'          => 'PPDB',
            'jumlahTotal'       => $this->ModelPpdb->jumlahTotal(),
            'jumlahLaki'        => $this->ModelPpdb->jumlahLaki(),
            'jumlahPerempuan'   => $this->ModelPpdb->jumlahPerempuan(),
            'jumlahSD'          => $this->ModelPpdb->jumlahSD(),
            'jumlahMI'          => $this->ModelPpdb->jumlahMI(),
            'datasekolah'       => $this->ModelPpdb->group_by(),
            'datatahun'         => $this->ModelTa->group_tahun(),
            'tahun'             => $this->ModelTa->AllData(),
            'dataanak'          => $this->ModelPpdb->group(),
        ];

        return view('ppdb/v_beranda', $data);
    }

    public function tambahSiswa()
    {
        session();

        $data = [
            'title'         => 'PPDB SMP',
            'subtitle'      => 'Add Siswa SMP',
            'menu'          => 'smp',
            'submenu'       => 'smp',
            'ppdb'          => $this->ModelPpdb->AllData(),
            'ta'            => $this->ModelTa->tahun(),
            'sekolah'       => $this->ModelSekolah->AllData(),
            'jenjang'       => $this->ModelJenjang->AllData(),
            'validation'    =>  \Config\Services::validation(),
            // 'siswa'       => $this->ModelFormulir->Siswapertahun(),
            'siswa'       => $this->Siswaformulir->findAll(),

        ];
        return view('smp/v_add', $data);
    }

    public function simpanDaftar()
    {

        $siswa = $this->ModelPpdb->DataSiswa();
        if ($this->validate([
            'nama_lengkap' => [
                'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'tempat_lahir' => [
                'label' => 'Tempat Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'nik' => [
                'label' => 'NIK',
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} wajib diisi',
                    'min_length' => '{field} 16 digit'
                ]
            ],
            'tanggal_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'alamat' => [
                'label' => 'Alamat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],

            'id_jenjang' => [
                'label' => 'Jenjang',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus dipilih'
                ]
            ],


        ])) {


            $data = [
                'id_sekolah'    => $this->request->getPost('id_sekolah'),
                'id_jenjang'  => $this->request->getPost('id_jenjang'),
                // 'kode_pendaftaran'  => $this->request->getPost('kode_pendaftaran'),
                'nisn'          => $this->request->getPost('nisn'),
                'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
                'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
                'alamat'        => $this->request->getPost('alamat'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'nama_ibu'      => $this->request->getPost('nama_ibu'),
                'no_telp'       => $this->request->getPost('no_telp'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'nik' => $this->request->getPost('nik'),
                'yatim' => $this->request->getPost('yatim'),
                'tgl_pendaftaran' => $this->request->getPost('tgl_pendaftaran'),
                'id_tahun'      => $this->request->getPost('id_tahun'),

            ];
            $this->ModelPpdb->add($data);
            session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
            return redirect()->to('smp');
        } else {
            $validation =  \Config\Services::validation();
            return redirect()->to('smp/tambahSiswa')->withInput()->with('validation', $validation);
        }
    }

    public function edit($id_ppdb)
    {

        $data = [

            'id'       => $id_ppdb,
            'nisn'          => $this->request->getPost('nisn'),
            'nama_lengkap'  => $this->request->getPost('nama_lengkap'),
            'tempat_lahir'  => $this->request->getPost('tempat_lahir'),
            'alamat'        => $this->request->getPost('alamat'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'nama_ibu'      => $this->request->getPost('nama_ibu'),
            'no_telp'       => $this->request->getPost('no_telp'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'id_sekolah' => $this->request->getPost('id_sekolah'),

        ];
        $this->ModelPpdb->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update !!!');
        return redirect()->to(base_url('ppdb'));
    }

    public function delete($id_ppdb)
    {
        $data = [
            'id' => $id_ppdb,
        ];
        $this->ModelPpdb->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus !!!');
        return redirect()->to(base_url('ppdb'));
    }





    public function dataSiswa($id_sekolah)
    {
        $data = $this->ModelSekolah->getSiswa($id_sekolah);
        $no = 1;
        foreach ($data as $value) {
            echo '<tr>
            <td>' . $no++ . '</td>
            <td>' . ucwords($value['nama_lengkap']) . '</td>
            <td>' . ucwords($value['jenis_kelamin']) . '</td>
            </tr>';
        }
    }

    public function dataAsalSekolah($id_jenjang)
    {
        $data = $this->ModelJenjang->getAsalSekolah($id_jenjang);

        echo '<option>--Pilih Sekolah--</option>';

        foreach ($data as $value) {
            echo '<option value="' . $value['id_sekolah'] . '">' . $value['sekolah'] . '</option>
           ';
        }
    }

    // public function buktidaftar($id)
    // {

    //     $options = new Options();
    //     $options->set('isHtml5ParserEnabled', true);
    //     $options->set('isPhpEnabled', true);
    //     $dompdf = new Dompdf($options);
    //     $dompdf->setOptions($options);
    //     $dompdf->output();
    //     $path = base_url('/foto/logo.png');

    //     $data = [
    //         'siswa'         => $this->ModelPpdb->siswa($id),
    //         'ta'            => $this->ModelTa->tahun(),
    //         'image_url'   => "<img src='data:image/png;base64,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'>"
    //     ];
    //     $html = view('smp/bukti', $data);
    //     //Atur Gambar

    //     $dompdf->loadHtml($html);
    //     $dompdf->setPaper('A5', 'potrait');
    //     $dompdf->render();
    //     $dompdf->stream('buktidaftar.pdf', array(
    //         "Attachment" => false
    //     ));
    //     exit();
    // }

    // public function buktidaftar($id)
    // {
    //     $data = [
    //         'siswa'         => $this->ModelPpdb->siswa($id)
    //     ];

    //     return view('ppdb/bukti', $data);
    // }

    public function buktidaftar($id)
    {
        $data = [
            'siswa'         => $this->ModelPpdb->siswa($id),
            'ta'            => $this->ModelTa->tahun(),
            'menu'          => 'smp',
            'submenu'          => 'smp',
            'title' => 'Halaman Print',
            'subtitle' => 'Halaman Print'
        ];
        return view('smp/bukti', $data);
    }
}
