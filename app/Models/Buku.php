<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku extends Model
{
    protected $table            = 'buku';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['judul' , 'pengarang', 'penerbit', 'tahun_terbit', 'jumlah_halaman', 'sinopsis'];  
    protected $returnType = 'object';

}
