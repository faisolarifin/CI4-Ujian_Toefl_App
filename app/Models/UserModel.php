<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 't_user';
    protected $primaryKey = 'id_user';

    protected $useAutoIncrement = true;
    
    protected $allowedFields = ['id_user', 'nama', 'username', 'password', 'role'];
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    public function search($q)
    {
        return $this->like('id_user', $q)->orLike('nama', $q);
    }
    public function getHasil()
    {
        $this->join('summary', 'summary.id_user = t_user.id_user', 'LEFT');
        $this->select('t_user.*');
        $this->select('summary.*');
        $this->where('t_user.role !=', 'admin');
        return $this;
    }


}