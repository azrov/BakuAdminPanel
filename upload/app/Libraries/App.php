<?php

namespace App\Libraries; 

use App\Models\SettingModel;
use App\Models\ModuleModel;
use App\Models\UserModel;
use App\Models\RoleModel;

class App
{
    public function vEncode($value)
    {
        helper(['cookie']);
        return base64_encode(base64_encode($value));
    }

    public function vDecode($value)
    {
        helper(['cookie']);
        return base64_decode(base64_decode($value));
    }

    public function vPassword($password, $dbpassword) 
    {
        if (md5($password) == $dbpassword) {
            return true;
        } else {
            return false;
        }
    }

    public function getVar($name)
    {
        helper(['cookie']);
        return $this->vDecode(get_cookie($name));
    }

    public function getRole()
    {
        return $this->getVar('role');
    }

    public function getInfo()
    {
        $model = model(SettingModel::class);
        $data  = $model->getInfo();
        return $data[0];
    }

    public function getTitle()
    {
        $data = $this->getInfo();
        return $data['title'];
    }

    public function getVersion()
    {
        $data = $this->getInfo();
        return $data['version'];
    }

    public function getUnRepair()
    {
        $data = $this->getInfo();
        return $data['underrepair'];
    }

    public function getModules()
    {
        $model = model(ModuleModel::class);
        return $model->getModules();
    }

    public function getUserInfo($id)
    {
        $model = model(UserModel::class);
        $data  = $model->getInfo($id);
        return $data[0];
    }

    public function getNewUsers()
    {
        $model = model(UserModel::class);
        return $model->newUsers();
    }

    public function getRoleInfo($id)
    {
        $model = model(RoleModel::class);
        $data  = $model->getInfo($id);
        return $data[0];
    }

    public function getRoleList()
    {
        $model = model(RoleModel::class);
        return $model->getList();
    }
}

?>