<?php

namespace App\Models;

use CodeIgniter\Model;

class JawabModel extends Model
{
    protected $table      = 't_jawab';
    protected $primaryKey = 'id_tes';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_tes', 'id_soal', 'jawaban', 'eval'];


}