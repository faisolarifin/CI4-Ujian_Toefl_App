<?php

namespace App\Models;

use CodeIgniter\Model;

class TesModel extends Model
{
    protected $table      = 't_tes';
    protected $primaryKey = 'id_tes';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_tes', 'id_user', 'id_bagian', 'jml_benar', 'status', 'tgl_start', 'tgl_finish'];

    public function getSection($user)
    {
        $this->join('t_bagian', 't_bagian.id_bagian = t_tes.id_bagian', 'LEFT');
        $this->join('t_soal', 't_bagian.id_bagian = t_soal.id_bagian', 'LEFT');
        $this->select('t_tes.*');
        $this->select('t_bagian.*');
        $this->select('count(t_soal.id_bagian) jml_soal');
        return $this->where(['t_tes.id_user' => $user])->groupBy('t_bagian.id_bagian');
    }

    public function getSectionById($tes)
    {
        $this->join('t_bagian', 't_bagian.id_bagian = t_tes.id_bagian', 'LEFT');
        $this->select('t_bagian.*');
        return $this->where(['t_tes.id_tes' => $tes])->first();
    }
    
}