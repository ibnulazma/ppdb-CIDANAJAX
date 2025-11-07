<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTransaksi extends Model
{
    protected $table = 'tbl_transaksi';
    protected $primaryKey = 'id_transaksi'; // opsional, tapi bagus kalau ada
    protected $allowedFields = ['tanggal_transaksi', 'jumlah', 'keterangan', 'id_formulir'];
    protected $useTimestamps = false;
    public function AllData()
    {
        return $this->db->table('tbl_transaksi')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_transaksi.id_ta', 'left')
            ->join('tbl_formulir', 'tbl_formulir.id_formulir = tbl_transaksi.id_formulir', 'left')
            ->where('status', '1')
            ->orderBy('tbl_formulir.id_formulir', 'ASC')
            ->get()->getResultArray();
    }

    public function getTableFormulir()
    {
        $builder = $this->db->table('tbl_formulir');
        $builder->whereIn('jenjang', ['SMA', 'SMK']);
        return $builder->get()->getResultArray();
    }



    // Transaksi PerTanggal
    public function getTotalHariIni()
    {
        return $this->selectSum('jumlah', 'total_transaksi')
            ->where('DATE(tanggal_transaksi)', date('Y-m-d'))
            ->get()
            ->getRow();
    }

    public function getRekapHariIni()
    {
        return $this->selectCount('*', 'jumlah_transaksi')
            ->selectSum('jumlah', 'total_nominal')
            ->where('DATE(tanggal_transaksi)', date('Y-m-d'))
            ->get()
            ->getRow();
    }



    public function getTotalByTanggalAndNama($tanggal = null, $search = null)
    {
        $builder = $this->selectSum('tbl_transaksi.jumlah', 'total')
            ->join('tbl_formulir', 'tbl_formulir.id_formulir = tbl_transaksi.id_formulir', 'left');

        // 🔹 Filter tanggal kalau ada
        if ($tanggal !== null && $tanggal !== '') {
            $builder->where('DATE(tbl_transaksi.tanggal_transaksi)', $tanggal);
        }

        // 🔹 Filter nama kalau ada
        if (!empty($search)) {
            $builder->like('tbl_formulir.nama_siswa', $search);
        }

        $row = $builder->get()->getRow();
        return $row ? $row->total : 0;
    }

    public function getFilteredTransaksi($tanggal = null, $search = null)
    {
        $builder = $this->select('tbl_formulir.nama_siswa, tbl_formulir.jenjang, SUM(tbl_transaksi.jumlah) as total_transaksi')
            ->join('tbl_formulir', 'tbl_formulir.id_formulir = tbl_transaksi.id_formulir', 'left')
            ->groupBy('tbl_formulir.nama_siswa');

        // 🔹 Filter tanggal
        if ($tanggal !== null && $tanggal !== '') {
            $builder->where('DATE(tbl_transaksi.tanggal_transaksi)', $tanggal);
        }

        // 🔹 Filter nama
        if (!empty($search)) {
            $builder->like('tbl_formulir.nama_siswa', $search);
        }

        return $builder->findAll();
    }





    public function cetak($id_transaksi)
    {
        return $this->db->table('tbl_transaksi')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_transaksi.id_ta', 'left')
            ->join('tbl_formulir', 'tbl_formulir.id_formulir = tbl_transaksi.id_formulir', 'left')
            ->where('id_transaksi', $id_transaksi)
            ->get()->getRowArray();
    }


    public function add($data)
    {
        $this->db->table('tbl_transaksi')
            ->insert($data);
        return $this->db->insertID(); // Return the inserted ID
    }
}
