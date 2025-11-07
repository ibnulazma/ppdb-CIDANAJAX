<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWeb extends Model
{


    protected $table = 'tbl_rincian';
    protected $primaryKey = 'id_rincian';
    protected $allowedFields = ['keterangan', 'periode', 'rincian', 'warna'];



    public function AllData()
    {
        return $this->db->table('tbl_rincian')
            ->join('tbl_ta', 'tbl_ta.id_ta = tbl_rincian.id_ta', 'left')
            ->get()
            ->getResultArray();
    }
    public function ubah($id_rincian)
    {
        $this->db->table('tbl_rincian')
            ->where('id_rincian', $id_rincian)
            ->get()->getRowArray();
    }
    public function add($data)
    {
        $this->db->table('tbl_rincian')
            ->insert($data);
    }
}
