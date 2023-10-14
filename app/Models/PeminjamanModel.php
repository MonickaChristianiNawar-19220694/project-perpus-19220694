<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Modules;

class PeminjamanModel extends Modules
{
    protected $table = 'tb_peminjaman';
    protected $primaryKey = 'id';
    protected $alloweFields = ['tgl_peminjaman', 'tgl_pengembalian', 'tb_pengguna_id_peminjaman', 'tb_pengguna_id_pengembalian', 'tb_anggota_id', 'tb_koleksibuku_id', 'denda'];
}