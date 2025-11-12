<?php

namespace App\Controllers;

use Config\Database;

use App\Models\ModelFormulir;
use App\Models\ModelItemSeragam;
use App\Models\ModelPembayaranSeragam;
use CodeIgniter\Controller;

class Seragam extends Controller
{
    public function __construct()
    {
        $this->db = Database::connect();
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB',
            'subtitle' => 'Pembayaran Seragam',
            'subtitle' => 'Pembayaran Seragam',
            'menu' => 'seragam',
            'submenu' => 'seragam',
        ];
        return view('pembayaran/index', $data);
    }

    public function cari()
    {
        $kode = $this->request->getPost('kode_pendaftaran');

        $mReg = new ModelFormulir();
        $mItem = new ModelItemSeragam();
        $mBayar = new ModelPembayaranSeragam();

        $siswa = $mReg->where('kode_pendaftaran', $kode)->first();

        if (!$siswa) {
            return json_encode(['status' => 'error', 'message' => 'Kode pendaftaran tidak ditemukan']);
        }

        $items = $mItem->findAll();
        $pembayaran = $mBayar->where('kode_pendaftaran', $kode)->findAll();

        return json_encode([
            'status' => 'success',
            'siswa' => $siswa,
            'items' => $items,
            'pembayaran' => $pembayaran
        ]);
    }

    public function bayar()
    {
        $db = \Config\Database::connect();
        $request = $this->request;

        $kode_pendaftaran = $request->getPost('kode_pendaftaran');
        $items = $request->getPost('items'); // array
        $bayar = $request->getPost('bayar'); // array

        $total_dibayar = array_sum($bayar);

        foreach ($items as $i => $item) {
            $nominal = (float) $bayar[$i];

            $db->table('pembayaran_seragam')->insert([
                'kode_pendaftaran' => $kode_pendaftaran,
                'nama_item'        => $item,
                'dibayar'          => $nominal,
                'tanggal'          => date('Y-m-d H:i:s'),
            ]);
        }

        // hitung total harga dan sisa
        $query = $db->table('item_seragam')
            ->where('kode_pendaftaran', $kode_pendaftaran)
            ->get()
            ->getResult();

        $total_harga = 0;
        foreach ($query as $q) {
            $total_harga += $q->harga;
        }

        $total_terbayar = $db->table('pembayaran_seragam')
            ->where('kode_pendaftaran', $kode_pendaftaran)
            ->selectSum('dibayar')
            ->get()
            ->getRow()
            ->dibayar;

        $sisa = $total_harga - $total_terbayar;

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Pembayaran berhasil disimpan.',
            'total_dibayar' => $total_terbayar,
            'sisa' => $sisa,
        ]);
    }
}
