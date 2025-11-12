<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelItemSeragam extends Model
{

    protected $table = 'item_seragam';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_item', 'harga'];
}
