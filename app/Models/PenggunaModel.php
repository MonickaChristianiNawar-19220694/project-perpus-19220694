<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Modules;

class PenggunaModel extends Modules
{
    protected $table = 'tb_pengguna';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'nama_lengkap', 'katasandi'];
}