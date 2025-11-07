<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSiswa extends Model
{
    public function getSiswa()
    {
        return $this->db->table('tbl_siswa')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left')
            ->join('tbl_guru', 'tbl_guru.id_guru = tbl_kelas.id_guru', 'left')
            ->where('id_siswa', session()->get('id_siswa'))
            ->get()
            ->getRowArray();
    }


    public function getSiswafull()
    {
        return $this->db->table('tbl_siswa')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left')
            ->join('tbl_guru', 'tbl_guru.id_guru = tbl_kelas.id_guru', 'left')
            ->where('id_siswa', session()->get('id_siswa'))
            ->get()
            ->getRowArray();
    }


    // ModelDaftarUlang

    public function AllData()
    {
        return $this->db->table('tbl_siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_siswa.id_tahun', 'left')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_siswa.id_kelas', 'left')
            ->where('status', '1')
            ->where('status_daftar', '2')
            ->orderBy('nama_lengkap', 'ASC')
            ->get()
            ->getResultArray();
    }
    public function SemuaData()
    {
        return $this->db->table('tbl_siswa')
            ->orderBy('id_siswa', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_siswa')
            ->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->update($data);
    }

    public function validasi($data)
    {
        $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->update($data);
    }


    public function delete_data($data)
    {
        $this->db->table('tbl_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->delete($data);
    }
    public function insertData($data)
    {
        $this->db->table('tbl_siswa')
            ->insert($data);
    }

    public function AllDaftarUlang()
    {
        return $this->db->table('tbl_siswa')
            ->limit(8)
            ->where('status_daftar', '1')
            ->orderBy('id_siswa')
            ->get()->getResultArray();
    }

    public function kelas_jk()
    {

        $sql = "SELECT kelas, 
        COUNT(kelas) as TOTAL, 
        COUNT(IF(jenis_kelamin = 'Laki-laki', jenis_kelamin, NULL)) as JUMLAH_L, 
        COUNT(IF(jenis_kelamin != 'Laki-laki', jenis_kelamin, NULL)) as JUMLAH_P 
        FROM tbl_siswa 
        INNER JOIN tbl_kelas ON tbl_siswa.id_kelas = tbl_kelas.id_kelas
        GROUP BY kelas
                       ";

        return $this->db->query($sql)->getResultArray();
    }


    public function jumlahDaftarUlang()
    {
        return $this->db->table('tbl_siswa')
            ->where('tbl_siswa.status_daftar', '1')
            ->countAllResults();
    }


    // // Data Siswa Perindividu
    // public function getSiswa()
    // {
    //     return $this->db->table('tbl_siswa')
    //         ->where('id_siswa', session()->get('id_siswa'))
    //         ->get()
    //         ->getRowArray();
    // }

    public function status()
    {
        $this->db->table('tbl_siswa')
            ->get()
            ->getRowArray();
    }

    public function jumlahTotal()
    {
        return $this->db->table('tbl_siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_siswa.id_tahun', 'left')
            ->where('status', '1')
            ->where('status_daftar', '2')
            ->countAllResults();
    }
}
