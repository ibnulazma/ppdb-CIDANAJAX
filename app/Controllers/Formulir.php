<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelFormulir;
use App\Models\ModelTa;
use App\Models\ModelJenjang;
use App\Models\ModelSekolah;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class Formulir extends BaseController
{

    public function __construct()
    {
        helper('form');
        helper('gantiformat');
        helper('formatindo');
        $this->ModelFormulir    = new ModelFormulir();
        $this->ModelTa    = new ModelTa();
        $this->ModelJenjang   = new ModelJenjang();
        $this->ModelSekolah   = new ModelSekolah();
    }
    public function index()
    {
        $no_pendaftaran = $this->ModelFormulir->noPendaftaran();
        $data = [
            'title'             => 'PPDB',
            'subtitle'          => 'Formulir Insan Kamil',
            'menu'              => 'formulir',
            'submenu'           => 'formulir',
            'formulir'           => $this->ModelFormulir->AllData(),
            'ta'            => $this->ModelTa->tahun(),
            'kode' => $no_pendaftaran
        ];
        return view('formulir/index', $data);
    }


    public function getData()
    {
        $model = new ModelFormulir();
        $request = service('request');

        $draw = $request->getVar('draw');
        $start = $request->getVar('start');
        $length = $request->getVar('length');
        $search = $request->getVar('search')['value'];

        $data = $model->getDataTable($start, $length, $search);
        $total = $model->countAll();
        $filtered = $model->countFiltered($search);

        return $this->response->setJSON([
            'draw' => intval($draw),
            'recordsTotal' => $total,
            'recordsFiltered' => $filtered,
            'data' => $data,
        ]);
    }




    // TAMBAH DATA
    public function add()
    {

        $nama = $this->request->getPost('nama_siswa');
        $slug = url_title($nama, '-', true);
        $data = [
            'kode_pendaftaran'      => $this->request->getPost('kode_pendaftaran'),
            'nama_siswa'            => $this->request->getPost('nama_siswa'),
            'tanggal_lahir'            => $this->request->getPost('tanggal_lahir'),
            'tempat_lahir'            => $this->request->getPost('tempat_lahir'),
            'nama_siswa'            => $this->request->getPost('nama_siswa'),
            'alamat'                => $this->request->getPost('alamat'),
            'orangtua'              => $this->request->getPost('orangtua'),
            'no_telp'               => $this->request->getPost('no_telp'),
            'program'               => $this->request->getPost('program'),
            'anakyatim'               => $this->request->getPost('anakyatim'),
            'id_jenjang'               => $this->request->getPost('id_jenjang'),
            'jurusan'               => $this->request->getPost('jurusan'),
            'catatan'               => $this->request->getPost('catatan'),
            'pondok'                => $this->request->getPost('pondok'),
            'tanggal'               => $this->request->getPost('tanggal'),
            'jenis_kelamin'         => $this->request->getPost('jenis_kelamin'),
            'orangtua'              => $this->request->getPost('orangtua'),
            'nama_sekolah'          => $this->request->getPost('nama_sekolah'),
            'id_ta'                 => $this->request->getPost('id_ta'),
            'ke_jenjang'                 => $this->request->getPost('ke_jenjang'),
            'slug'                 => $slug,



        ];


        $id_formulir = $this->ModelFormulir->add($data);


        if (!$id_formulir) {
            throw new \RuntimeException('Gagal menyimpan data formulir.');
        }

        $siswa = $this->ModelFormulir->find($id_formulir);
        $kode  = $siswa['kode_pendaftaran']; // ambil kode dari database


        $writer = new PngWriter();
        $qrCode = new QrCode($kode);
        $result = $writer->write($qrCode);

        // Buat folder jika belum ada
        $folderPath = FCPATH . 'uploads/'; // simpan di public/uploads
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        $kode = $this->request->getPost('kode_pendaftaran');
        $qrFileName = 'qrcode_' . $kode . '.png';
        $qrFilePath = $folderPath . $qrFileName;

        // Simpan file ke public/uploads
        $result->saveToFile($qrFilePath);

        // Simpan path relatif ke DB (agar bisa diakses via base_url)
        $this->ModelFormulir->update($id_formulir, [
            'qr_code' => 'uploads/' . $qrFileName
        ]);


        session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
        session()->setFlashdata('id_formulir', $id_formulir);
        return redirect()->to('formulir/cetak/' . $id_formulir);
    }

    public function setSiswaSession()
    {
        $id = $this->request->getPost('id_formulir');
        session()->set('edit_formulir_id', $id);
        return $this->response->setJSON(['status' => 'ok']);
    }


    public function edit($slug)
    {
        $siswa = $this->ModelFormulir->select('tbl_formulir.*, tbl_jenjang.jenjang')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = tbl_formulir.id_jenjang', 'left')
            ->where('tbl_formulir.slug', $slug)
            ->first();


        if (!$siswa) {
            return redirect()->to(base_url('formulir'))->with('error', 'Data siswa tidak ditemukan!');
        }

        $jenjang = $this->ModelJenjang->AllData();
        return view('formulir/edit', [
            'siswa' => $siswa,
            'title'             => 'PPDB',
            'subtitle'          => 'Formulir Insan Kamil',
            'menu'              => 'formulir',
            'submenu'           => 'formulir',
            'jenjang'           => $jenjang
        ]);
    }




    public function detail($slug)
    {
        $siswa = $this->ModelFormulir->select('tbl_formulir.*, tbl_jenjang.jenjang')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = tbl_formulir.id_jenjang', 'left')
            ->where('tbl_formulir.slug', $slug)
            ->first();


        if (!$siswa) {
            return redirect()->to(base_url('formulir'))->with('error', 'Data siswa tidak ditemukan!');
        }

        $jenjang = $this->ModelJenjang->AllData();
        return view('formulir/detail', [
            'siswa' => $siswa,
            'title'             => 'PPDB',
            'subtitle'          => 'Formulir Insan Kamil',
            'menu'              => 'formulir',
            'submenu'           => 'formulir',
            'jenjang'           => $jenjang
        ]);
    }



    public function delete($id)
    {
        $model = new ModelFormulir();
        $model->delete($id);
        return $this->response->setJSON(['status' => 'ok']);
    }



    public function getSekolahByJenjang($id_jenjang)
    {
        $ModelSekolah = new ModelSekolah();

        $sekolah = $ModelSekolah
            ->where('id_jenjang', $id_jenjang)
            ->findAll();

        return $this->response->setJSON($sekolah);
    }



    public function update($slug)
    {
        $ModelFormulir = new \App\Models\ModelFormulir();

        // Validasi input dulu (opsional tapi disarankan)
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_siswa'   => 'required',
            'alamat'       => 'required',
            'tanggal_lahir' => 'required',
            'ke_jenjang'   => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Ambil data dari form
        $data = [
            'nama_siswa'   => $this->request->getPost('nama_siswa'),
            'alamat'   => $this->request->getPost('alamat'),
            'orangtua'   => $this->request->getPost('orangtua'),
            'no_telp'   => $this->request->getPost('no_telp'),
            'tempat_lahir'   => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir'   => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin'   => $this->request->getPost('jenis_kelamin'),
            'nama_sekolah'   => $this->request->getPost('nama_sekolah'),
            'id_jenjang'   => $this->request->getPost('id_jenjang'),
            'jurusan'   => $this->request->getPost('jurusan'),
            'pondok'   => $this->request->getPost('pondok'),
            'anakyatim'   => $this->request->getPost('anakyatim'),
            'catatan'   => $this->request->getPost('catatan'),
            'program'   => $this->request->getPost('program'),
            'ke_jenjang'   => $this->request->getPost('ke_jenjang'),

        ];

        // Update ke database berdasarkan slug
        $ModelFormulir->where('slug', $slug)->set($data)->update();

        // Redirect kembali ke halaman utama dengan pesan sukses
        return redirect()->to(base_url('formulir'))->with('pesan', 'Data siswa berhasil diperbarui!');
    }














    public function cetak($id_formulir)
    {
        // Retrieve the formulir data using the ID
        $data = $this->ModelFormulir->cetak($id_formulir);


        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data formulir tidak ditemukan');
        }

        // Pass the data to the view for printing
        return view('formulir/print', ['data' => $data]);
    }








    public function tambah()
    {


        // var_dump(session()->get()); // Menampilkan semua session
        // exit();
        // if (!session()->has('level')) {
        //     return redirect()->to(base_url('auth'));
        // }



        $no_pendaftaran = $this->ModelFormulir->noPendaftaran();
        $data = [
            'title'             => 'PPDB',
            'subtitle'          => 'Formulir Insan Kamil',
            'menu'              => 'formulir',
            'submenu'           => 'formulir',
            'formulir'           => $this->ModelFormulir->AllData(),
            'ta'                => $this->ModelTa->tahun(),
            'sekolah'            => $this->ModelSekolah->AllData(),
            'jenjang'            => $this->ModelJenjang->AllData(),
            'kode' => $no_pendaftaran
        ];
        return view('formulir/tambah', $data);
    }










    public function dataAsalSekolah($id_jenjang)
    {
        $data = $this->ModelJenjang->getAsalSekolah($id_jenjang);

        echo '<option>--Pilih Sekolah--</option>';

        foreach ($data as $value) {
            echo '<option value="' . $value['nama_sekolah'] . '">' . $value['nama_sekolah'] . '</option>
           ';
        }
    }
}
