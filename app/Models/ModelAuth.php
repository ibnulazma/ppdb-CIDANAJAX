<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{



    protected $table = 'tbl_user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama_user', 'email', 'password', 'foto', 'status_aktif', 'level'];



    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
