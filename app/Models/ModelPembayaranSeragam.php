<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPembayaranSeragam extends Model
{
    protected $table = 'pembayaran_seragam';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_pendaftaran', 'tanggal', 'total_harga', 'dibayar', 'sisa', 'status', 'nama_item'];
}
