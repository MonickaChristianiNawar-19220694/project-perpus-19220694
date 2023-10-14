<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Modules;

class PenerbitModel extends Modules
{
    protected $table = 'tb_penerbit';
    protected $primaryKey = 'id';
    protected $allowedFields = ['penerbit', 'kota'];
}