<?php 

namespace App\Models; 

use CodeIgniter\Model;
  
class PermissionModel extends Model {

    protected $table            = 'permissions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = [
        'role',
        'name'
    ];

    public function getInfo($id)
    {
        $builder = $this->builder($this->table);
        $builder = $builder->where('id', $id);
        $builder = $builder->get();
        return $builder->getResultArray();
    }
}