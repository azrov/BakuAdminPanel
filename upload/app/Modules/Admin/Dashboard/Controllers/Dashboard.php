<?php 

namespace App\Modules\Admin\Dashboard\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $page = '\dashboard';
        $data = [
            'page'  => $page,
            'title' => lang('App.dashboard')
        ];

        $this->setView($data);
    }
}