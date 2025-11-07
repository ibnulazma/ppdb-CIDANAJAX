<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFormulir extends Model
{

    protected $table = 'tbl_formulir';
    protected $primaryKey = 'id_formulir';
    protected $allowedFields = [
        'kode_formulir',
        'nama_siswa',
        'alamat',
        'orangtua',
        'no_telp',
        'tempat_lahir',
        'tanggal_lahir',
        'id_ta',
        'jenis_kelamin',
        'asal_sekolah',
        'nama_sekolah',
        'jenjang',
        'jurusan',
        'pondok',
        'anakyatim',
        'catatan',
        'program',
        'ke_jenjang',
        'slug'
    ];

    protected $useTimestamps = false;






    public function AllData()

    {
        return $this->db->table('tbl_formulir')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_formulir.id_ta', 'left')
            ->where('status', '1')
            ->orderBy('id_formulir', 'ASC')
            ->get()->getResultArray();
    }
    public function Siswapertahun()
    {
        return $this->db->table('tbl_formulir')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_formulir.id_ta', 'left')
            ->orderBy('id_formulir', 'ASC')
            ->where('status', '1')
            ->get()->getResultArray();
    }


    public function cetak($id_formulir)
    {
        return $this->db->table('tbl_formulir')
            ->where('id_formulir', $id_formulir)
            ->get()->getRowArray();
    }

    public function jumlhFormulir()
    {
        return $this->db->table('tbl_formulir')
            ->orderBy('id_formulir', 'ASC')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_formulir.id_ta', 'left')
            ->where('status', '1')
            ->countAllResults();
    }
    public function add($data)
    {
        $this->db->table('tbl_formulir')
            ->insert($data);
        return $this->db->insertID(); // Return the inserted ID
    }

    public function noPendaftaran()
    {

        $db = \Config\Database::connect();

        // Mengambil data tahun akademik yang aktif
        $ta = $db->table('tbl_ta')
            ->where('status', '1')
            ->get()
            ->getRowArray();

        // Cek jika data tahun akademik tidak ditemukan
        if (!$ta) {
            return 'Data Tahun Akademik tidak ditemukan.';
        }

        // Mengambil kode pendaftaran terakhir
        $kode = $this->db->table('tbl_formulir')
            ->select('RIGHT(kode_pendaftaran, 2) as kode_pendaftaran', false)
            ->orderBy('kode_pendaftaran', 'DESC')
            ->get()
            ->getRowArray();

        // Menangani jika kode_pendaftaran kosong
        if (!$kode || $kode['kode_pendaftaran'] == null) {
            $no = 1;
        } else {
            $no = intval($kode['kode_pendaftaran']) + 1;
        }

        // Menentukan jenjang dan batas angka
        $jenjang = "AX0063";
        $batas = str_pad($no, 4, "0", STR_PAD_LEFT);

        // Membuat kode pendaftaran
        $kode_pendaftaran = $jenjang . "-" . $ta['kode'] . $batas;
        return $kode_pendaftaran;
    }



    public function getDataTable($start, $length, $search = null)
    {
        $builder = $this->builder();
        if ($search) {
            $builder->like('nama_siswa', $search)
                ->orLike('jurusan', $search);
        }
        return $builder->get($length, $start)->getResultArray();
    }

    public function countFiltered($search = null)
    {
        $builder = $this->builder();
        if ($search) {
            $builder->like('nama_siswa', $search)
                ->orLike('jurusan', $search);
        }
        return $builder->countAllResults();
    }
}
