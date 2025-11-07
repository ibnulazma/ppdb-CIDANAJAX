<?php

namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_banner')

            ->get()->getResultArray();
    }


    public function add($data)
    {
        $this->db->table('tbl_banner')
            ->insert($data);
    }
}
