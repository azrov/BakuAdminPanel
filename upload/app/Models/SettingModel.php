<?php 

namespace App\Models; 

use CodeIgniter\Model;
  
class SettingModel extends Model {

    protected $table            = 'settings';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = [
        'title',
        'description',
        'keywords',
        'author',
        'icon',
        'version',
        'underrepair'
    ];

    public function getInfo()
    {
        $builder = $this->builder($this->table);
        $builder = $builder->where('id', 1);
        $builder = $builder->get();
        return $builder->getResultArray();
    }

    public function edit($data)
    {
        $builder = $this->builder($this->table);
        $builder->where('id', 1);
        return $builder->update($data);
    }
}