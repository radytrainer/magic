<?php namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'u_id';

    protected $returnType     = 'array';


    protected $allowedFields = ['username', 'email','pro_id', 'sub_id'];

    public function getUserInfo() 
    {
        return $this->db->table('user')
        ->join('subjects', 'user.sub_id = subjects.s_id')
        ->join('province', 'province.p_id = user.pro_id')
        ->get()->getResultArray();
    }

   
}