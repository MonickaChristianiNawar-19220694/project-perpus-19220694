<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Modules;

class BukuModel extends Modules
{
    protected $table = 'tb_buku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tb_kategori_id', 'tb_penerbit_id', 'judul', 'edisi', 'cetakan', 'sinopsis', 'halaman', 'penilis', 'tahun', 'cover_file'];
}