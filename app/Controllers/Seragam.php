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

        // 🔎 Cek apakah siswa ada
        $siswa = $this->db->table('tbl_formulir')
            ->where('kode_pendaftaran', $kode)
            ->get()
            ->getRow();

        if (!$siswa) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Siswa tidak ditemukan.'
            ]);
        }

        // 🧾 Ambil semua item seragam
        $items = $this->db->table('item_seragam')->get()->getResult();

        $result_items = [];
        foreach ($items as $item) {
            $harga = $item->harga;

            $dibayar = $this->db->table('pembayaran_seragam')
                ->where('kode_pendaftaran', $kode)
                ->where('nama_item', $item->nama_item)
                ->selectSum('dibayar')
                ->get()
                ->getRow()
                ->dibayar ?? 0;

            $sisa = $harga - $dibayar;

            $result_items[] = [
                'nama_item' => $item->nama_item,
                'harga' => $harga,
                'dibayar' => $dibayar,
                'sisa' => $sisa,
                'status' => $sisa <= 0 ? 'Lunas' : 'Belum Lunas'
            ];
        }

        // 💳 Ambil riwayat pembayaran
        $pembayaran = $this->db->table('pembayaran_seragam')
            ->where('kode_pendaftaran', $kode)
            ->orderBy('tanggal', 'DESC')
            ->get()
            ->getResult();

        // ✅ Kembalikan sesuai format JS
        return $this->response->setJSON([
            'status' => 'success',
            'siswa' => [
                'kode_pendaftaran' => $siswa->kode_pendaftaran,
                'nama_siswa' => $siswa->nama_siswa,
                'ke_jenjang' => $siswa->ke_jenjang,
                'jurusan' => $siswa->jurusan
            ],
            'items' => $result_items,
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
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Data tidak lengkap.'
            ]);
        }
        $id_transaksi = 'TRX' . date('YmdHis') . strtoupper(bin2hex(random_bytes(3)));
        $total_semua_dibayar = 0;
        $hasil = [];

        foreach ($items as $i => $item) {
            $nominal = (float) $bayar[$i];

            // Ambil harga item
            $hargaItem = $this->db->table('item_seragam')
                ->where('nama_item', $item)
                ->get()
                ->getRow()
                ->harga ?? 0;

            // Total yang sudah dibayar sebelumnya untuk item ini
            $sudahBayar = $this->db->table('pembayaran_seragam')
                ->where('kode_pendaftaran', $kode_pendaftaran)
                ->where('nama_item', $item)
                ->selectSum('dibayar')
                ->get()
                ->getRow()
                ->dibayar ?? 0;

            $totalBayarSekarang = $sudahBayar + $nominal;
            $sisa = max(0, $hargaItem - $totalBayarSekarang);
            $status = $sisa <= 0 ? 'Lunas' : 'Cicil';

            // Simpan ke database
            $this->db->table('pembayaran_seragam')->insert([
                'id_transaksi' => $id_transaksi,
                'kode_pendaftaran' => $kode_pendaftaran,
                'tanggal'          => date('Y-m-d H:i:s'),
                'nama_item'        => $item,
                'total_harga'      => $hargaItem,
                'dibayar'          => $nominal,
                'sisa'             => $sisa,
                'status'           => $status,

            ]);

            $insert_ids[] = $this->db->insertID(); // ✅ ambil ID terakhir
            $total_semua_dibayar += $nominal;
            $hasil[] = [
                'item' => $item,
                'harga' => $hargaItem,
                'dibayar' => $nominal,
                'sisa' => $sisa,
                'status' => $status,


            ];
        }

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Pembayaran berhasil disimpan.',
            'total_dibayar' => $total_semua_dibayar,
            'detail' => $hasil,
            'id_transaksi' => $id_transaksi // 🧾 kirim ID ke front-end
        ]);
    }


    public function kwitansi($id_transaksi)
    {
        // Ambil semua pembayaran siswa di tanggal tersebut
        // pastikan format tanggal: YYYY-MM-DD
        $bayar = $this->db->table('pembayaran_seragam')
            ->where('id_transaksi', $id_transaksi)
            ->orderBy('id', 'ASC')
            ->get()
            ->getResult();

        if (!$bayar) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data kwitansi tidak ditemukan.');
        }

        // Ambil data siswa
        $siswa = $this->db->table('tbl_formulir')
            ->where('kode_pendaftaran',  $bayar[0]->kode_pendaftaran)
            ->get()
            ->getRow();

        return view('pembayaran/kwitansi', [
            'bayar' => $bayar,
            'siswa' => $siswa,

        ]);
    }
}
