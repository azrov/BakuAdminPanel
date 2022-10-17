<?php 

namespace App\Modules\Admin\Roles\Controllers;

use App\Models\RoleModel;

class Roles extends BaseController
{
    public function index()
    {
        $page  = '\roles';
        $model = model(RoleModel::class);
        $data  = [
            'page'     => $page,
            'model'    => $model,
            'paginate' => $model->paginate(),
            'pager'    => $model->pager,
            'title'    => lang('App.roles')
        ];

        $this->setView($data);
    }
}