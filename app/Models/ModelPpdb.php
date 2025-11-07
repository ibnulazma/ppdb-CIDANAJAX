<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPpdb extends Model
{

    public function AllData()
    {
        return $this->db->table('siswa')
            ->join('tbl_sekolah', 'tbl_sekolah.id_sekolah = siswa.id_sekolah', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = siswa.id_jenjang', 'left')
            // ->orderBy('nama_lengkap','ASC')
            ->where('status', '1')
            // ->get($limit, $start)
            ->get()
            ->getResultArray();
    }

    public function DataSiswa()
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->where('id')
            ->get()->getRowArray();
    }

    public function siswa($id)
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->join('tbl_sekolah', 'tbl_sekolah.id_sekolah = siswa.id_sekolah', 'left')
            ->where('id', $id)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('siswa')
            ->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('siswa')
            ->where('id', $data['id'])
            ->update($data);
    }
    public function delete_data($data)
    {
        $this->db->table('siswa')
            ->where('id', $data['id'])
            ->delete($data);
    }

    public function dataMI()
    {
        return $this->db->table('siswa')
            ->join('tbl_sekolah', 'tbl_sekolah.id_sekolah = siswa.id_sekolah', 'left')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = siswa.id_jenjang', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->orderBy('sekolah', 'ASC')
            ->where('jenjang', 'MI')
            ->where('status', '1')
            ->get()->getResultArray();
    }
    public function dataSD()
    {
        return $this->db->table('siswa')
            ->join('tbl_sekolah', 'tbl_sekolah.id_sekolah = siswa.id_sekolah', 'left')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = siswa.id_jenjang', 'left')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->orderBy('sekolah', 'ASC')
            ->where('jenjang', 'SD')
            ->where('status', '1')
            ->get()->getResultArray();
    }
    public function jumlahTotal()
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->where('status', '1')
            ->countAllResults();
    }
    public function jumlahLaki()
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->where('siswa.jenis_kelamin', 'Laki-laki')
            ->where('status', '1')
            ->countAllResults();
    }
    public function jumlahPerempuan()
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->where('siswa.jenis_kelamin', 'Perempuan')
            ->where('status', '1')
            ->countAllResults();
    }
    public function jumlahSD()
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = siswa.id_jenjang', 'left')
            ->where('siswa.id_jenjang', '1')
            ->where('status', '1')
            ->countAllResults();
    }
    public function jumlahMI()
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->join('tbl_jenjang', 'tbl_jenjang.id_jenjang = siswa.id_jenjang', 'left')
            ->where('siswa.id_jenjang', '2')
            ->where('status', '1')
            ->countAllResults();
    }

    public function group_by()
    {
        $builder = $this->db->table('siswa');
        $builder->join('tbl_sekolah', 'tbl_sekolah.id_sekolah = siswa.id_sekolah', 'left');
        $builder->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left');
        $builder->select('sekolah, COUNT("sekolah") AS jumlah');
        $builder->groupBy('sekolah');
        $builder->where('status', '1');
        $query = $builder->get();
        return $query;
    }

    public function group()
    {

        // return $this->db->table('siswa')
        //     ->join('tbl_sekolah', 'tbl_sekolah.id_sekolah = siswa.id_sekolah', 'left')
        //     ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
        //     // ->orderBy('siswa.id_sekolah')
        //     ->groupBy('sekolah', 'nama_lengkap')
        //     ->where('status', '1')
        //     ->get()
        //     ->getResultArray();
        $sql = " SELECT * FROM siswa INNER JOIN tbl_sekolah ON tbl_sekolah.id_sekolah = siswa.id_sekolah ORDER BY sekolah  ";
        return $this->db->query($sql)->getResultArray();
    }
    public function total_daftar()
    {
        return $this->db->table('siswa')
            ->join('tbl_ta', 'tbl_ta.id_ta = siswa.id_tahun', 'left')
            ->where('status', '1')
            ->countAllResults();
    }
}
