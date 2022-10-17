<?php 

namespace App\Models; 

use CodeIgniter\Model;
  
class ModuleModel extends Model {

    protected $table            = 'modules';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = [
        'role',
        'name',
        'description',
        'author',
        'path',
        'icon',
        'version',
        'status',
        'blocked'
    ];

    public function getModules()
    {
        $builder = $this->builder($this->table);
        $builder = $builder->get();
        return $builder->getResultArray();
    }

    public function getInfo($id)
    {
        $builder = $this->builder($this->table);
        $builder = $builder->where('id', $id);
        $builder = $builder->get();
        return $builder->getResultArray();
    }
}