<?php namespace App\Models;
use CodeIgniter\Model;

class ProvinceModel extends Model
{
    protected $table      = 'province';
    protected $primaryKey = 'p_id';

    protected $returnType     = 'array';


    protected $allowedFields = ['proname'];

    public function getAllProvinces() 
    {
        return $this->db->table('province')->get()->getResultArray();
    }

   
}