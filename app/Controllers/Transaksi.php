<?php

namespace App\Controllers;

use App\Models\ModelSiswa;
use App\Models\ModelJenjang;
use App\Models\ModelTransaksi;

class Transaksi extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelSiswa = new ModelSiswa();
        $this->ModelTransaksi = new ModelTransaksi();
        $this->ModelJenjang = new ModelJenjang();
    }
    public function index()
    {

        $tanggal = $this->request->getGet('tanggal');
        $search  = $this->request->getGet('search');

        if ($tanggal === '' || $tanggal === null) {
            $tanggal = null;
        }
        $rekapdata = $this->ModelTransaksi->getFilteredTransaksi($tanggal, $search);
        $total     = $this->ModelTransaksi->getTotalByTanggalAndNama($tanggal, $search);

        $rekap     = $this->ModelTransaksi->getRekapHariIni($tanggal, $search);

        $data = [
            'title'     => 'SPMB',
            'subtitle'  => 'Transaksi Pembayaran',
            'menu'      => 'transaksi',
            'submenu'   => 'transaksi',
            'tanggal'   => $tanggal,
            'search'    => $search,
            'rekapdata' => $rekapdata,
            'total'     => $total,
            'rekap' => $rekap,
            'siswa' => $this->ModelTransaksi->getTableFormulir()
        ];

        return view('transaksi/index', $data);
    }

    // public function caritransaksi() {}

    public function getData()
    {
        $tanggal = $this->request->getGet('tanggal');
        $data = $this->ModelTransaksi->getTransaksi($tanggal);

        // Hitung total transaksi
        $total = 0;
        foreach ($data as $d) {
            $total += $d['jumlah'];
        }

        return $this->response->setJSON([
            'data' => $data,
            'total' => $total
        ]);
    }




    public function print()
    {
        $tanggal = $this->request->getGet('tanggal');
        $search  = $this->request->getGet('search');

        if ($tanggal === '' || $tanggal === null) {
            $tanggal = null;
        }

        $rekapdata = $this->ModelTransaksi->getFilteredTransaksi($tanggal, $search);
        $total     = $this->ModelTransaksi->getTotalByTanggalAndNama($tanggal, $search);

        $data = [
            'title'     => 'Laporan Transaksi',
            'tanggal'   => $tanggal,
            'search'    => $search,
            'rekapdata' => $rekapdata,
            'total'     => $total,
        ];

        return view('transaksi/print', $data);
    }


    public function bayar()
    {
        $data = [
            'id_formulir'      => $this->request->getPost('id_formulir'),
            'jumlah'      => $this->request->getPost('jumlah'),

            'tanggal_transaksi'      => $this->request->getPost('tanggal_transaksi'),
            'pembayaran'      => $this->request->getPost('pembayaran'),



        ];


        $id_transaksi = $this->ModelTransaksi->add($data);
        session()->setFlashdata('pesan', 'Peserta Didik Berhasil Ditambah');
        session()->setFlashdata('id_transaksi', $id_transaksi);
        return redirect()->to('transaksi/kwitansi/' . $id_transaksi);
    }




    public function kwitansi($id_transaksi)
    {
        // Retrieve the formulir data using the ID
        $data = $this->ModelTransaksi->cetak($id_transaksi);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data formulir tidak ditemukan');
        }

        // Pass the data to the view for printing
        return view('transaksi/kwitansi', ['data' => $data]);
    }

    public function add()
    {
        $data = [
            'nama_sekolah'       => $this->request->getPost('nama_sekolah'),
            'id_jenjang'    => $this->request->getPost('id_jenjang'),

        ];
        $this->ModelSekolah->add($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!!');
        return redirect()->to(base_url('sekolah'));
    }

    public function edit($id_sekolah)
    {
        $data = [
            'id_sekolah'    => $id_sekolah,
            'id_jenjang'    => $this->request->getPost('id_jenjang'),
            'sekolah'       => $this->request->getPost('sekolah'),

        ];
        $this->ModelSekolah->edit($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Update !!!');
        return redirect()->to(base_url('sekolah'));
    }

    public function delete($id_sekolah)
    {
        $data = [
            'id_sekolah' => $id_sekolah,
        ];
        $this->ModelSekolah->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Di Hapus !!!');
        return redirect()->to(base_url('sekolah'));
    }
}
