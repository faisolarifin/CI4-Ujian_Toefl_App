<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalModel extends Model
{
    protected $table      = 't_soal';
    protected $primaryKey = 'id_soal';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_soal', 'id_bagian', 'id_topik', 'no_soal', 'soal', 'opsi_a', 'opsi_b', 'opsi_c', 'opsi_d', 'jawaban'];

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    public function getSoal()
    {
        $this->join('t_topik', 't_topik.id_topik = t_soal.id_topik', 'LEFT');
        $this->select('t_soal.*');
        $this->select('t_topik.content, t_topik.nm_topik');
        return $this;
    }

}