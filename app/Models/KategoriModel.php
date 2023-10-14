<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Modules;

class KategoriModel extends Modules
{
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kategori', 'kode_ddc'];
}