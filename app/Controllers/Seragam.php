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

        $siswa = $this->db->table('tbl_formulir')
            ->where('kode_pendaftaran', $kode)
            ->get()
            ->getRow();

        if (!$siswa) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Kode registrasi tidak ditemukan.']);
        }

        // ambil item seragam
        $items = $this->db->table('item_seragam')->get()->getResult();

        // ambil riwayat pembayaran
        $pembayaran = $this->db->table('pembayaran_seragam')
            ->where('kode_pendaftaran', $kode)
            ->orderBy('tanggal', 'DESC')
            ->get()
            ->getResult();

        return $this->response->setJSON([
            'status' => 'success',
            'siswa' => $siswa,
            'items' => $items,
            'pembayaran' => $pembayaran
        ]);
    }

    public function bayar()
    {
        $post = $this->request->getPost();

        $kode_pendaftaran = $post['kode_pendaftaran'];
        $items = $post['items'] ?? [];
        $bayar = $post['bayar'] ?? [];

        if (empty($kode_pendaftaran) || empty($items)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Data tidak lengkap.']);
        }

        $total_dibayar = array_sum($bayar);

        // hitung total harga semua item yang ada di item_seragam
        $total_harga = $this->db->table('item_seragam')->selectSum('harga')->get()->getRow()->harga;

        // total yang sudah pernah dibayar sebelumnya
        $total_terbayar = $this->db->table('pembayaran_seragam')
            ->where('kode_pendaftaran', $kode_pendaftaran)
            ->selectSum('dibayar')
            ->get()
            ->getRow()
            ->dibayar ?? 0;

        $total_terbayar += $total_dibayar;
        $sisa = $total_harga - $total_terbayar;

        $status = ($sisa <= 0) ? 'Lunas' : 'Cicil';

        // Simpan per item yang dibayar
        foreach ($items as $i => $item) {
            $nominal = (float) $bayar[$i];

            $this->db->table('pembayaran_seragam')->insert([
                'kode_pendaftaran' => $kode_pendaftaran,
                'tanggal'          => date('Y-m-d H:i:s'),
                'total_harga'      => $total_harga,
                'dibayar'          => $nominal,
                'sisa'             => max(0, $sisa),
                'status'           => $status,
                'nama_item'        => $item
            ]);
        }

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Pembayaran berhasil disimpan.',
            'total_dibayar' => $total_terbayar,
            'sisa' => $sisa,
            'status_bayar' => $status
        ]);
    }
}
