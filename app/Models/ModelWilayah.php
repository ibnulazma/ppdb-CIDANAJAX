<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWilayah extends Model
{
    public function AllData()
    {
        return $this->db->table('provinsi')
            ->orderBy('id_provinsi', 'ASC')
            ->get()->getResultArray();
    }
    public function kabupaten()
    {
        return $this->db->table('kabupaten')
            ->orderBy('id_kabupaten', 'ASC')
            ->get()->getResultArray();
    }
    public function kecamatan()
    {
        return $this->db->table('kecamatan')
            ->orderBy('dis_id', 'ASC')
            ->get()->getResultArray();
    }
}
