<?php

namespace App\Models;

use CodeIgniter\Model;

class BagianModel extends Model
{
    protected $table      = 't_bagian';
    protected $primaryKey = 'id_bagian';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_bagian', 'nm_section', 'limit_time', 'keterangan', 'direction'];

}