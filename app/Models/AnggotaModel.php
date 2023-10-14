<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Modules;

class AnggotaModel extends Modules
{
    protected $table = 'tb_anggota';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_lengkap', 'alamat', 'kota', 'notelp', 'email'];
}