<?php

namespace App\Models;

use CodeIgniter\Model;

class TopikModel extends Model
{
    protected $table      = 't_topik';
    protected $primaryKey = 'id_topik';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_topik', 'id_bagian', 'nm_topik', 'content'];


}