<?php 

namespace App\Models; 

use CodeIgniter\Model;
  
class UserModel extends Model {

    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    
    protected $allowedFields = [
        'role',
        'name',
        'surname',
        'username',
        'email',
        'password',
        'avatar',
        'created_at',
        'updated_at'
    ];

    public function getInfo($id)
    {
        $builder = $this->builder($this->table);
        $builder = $builder->where('id', $id);
        $builder = $builder->get();
        return $builder->getResultArray();
    }

    public function newUsers()
    {
        $builder = $this->builder($this->table);
        $builder = $builder->orderBy('id DESC');
        $builder = $builder->get(7);
        return $builder->getResultArray();
    }

    public function edit($id, $data)
    {
        $builder = $this->builder($this->table);
        $builder->where('id', $id);
        return $builder->update($data);
    }

    public function del($id)
    {
        $builder = $this->builder($this->table);
        return $builder->delete(['id' => $id]);
    }
}