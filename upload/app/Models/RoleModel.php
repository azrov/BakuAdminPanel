<?php 

namespace App\Models; 

use CodeIgniter\Model;
  
class RoleModel extends Model {

    protected $table            = 'roles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = [
        'name'
    ];

    public function getInfo($id)
    {
        $builder = $this->builder($this->table);
        $builder = $builder->where('id', $id);
        $builder = $builder->get();
        return $builder->getResultArray();
    }

    public function getList()
    {
        $builder = $this->builder($this->table);
        $builder = $builder->get();
        return $builder->getResultArray();
    }
}