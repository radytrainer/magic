<?php namespace App\Models;
use CodeIgniter\Model;

class SubjectModel extends Model
{
    protected $table      = 'subjects';
    protected $primaryKey = 's_id';

    protected $returnType     = 'array';


    protected $allowedFields = ['subname'];

    public function getAllSubject() 
    {
        return $this->db->table('subjects')->get()->getResultArray();
    }

   
}