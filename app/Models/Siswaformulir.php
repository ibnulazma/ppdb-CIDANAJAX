<?php

namespace App\Models;

use CodeIgniter\Model;

class Siswaformulir extends Model
{
    protected $table                = 'tbl_formulir';
    protected $primaryKey           = 'id_formulir';
    protected $allowedFields        = [
        'kode_pendaftaran',
        'nama_siswa',
        'alamat',
        'orangtua',
        'no_telp'
    ];
    // public function AllData()
    // {
    //     return $this->db->table('tbl_formulir')
    //         ->join('tbl_ta', 'tbl_ta.id_ta = tbl_formulir.id_ta', 'left')
    //         ->where('status', '1')
    //         ->orderBy('id_formulir', 'ASC')
    //         ->get()->getResultArray();
    // }
}
