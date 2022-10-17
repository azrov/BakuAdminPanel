<?php 

namespace App\Modules\Admin\Settings\Controllers;

use App\Models\SettingModel;

class Settings extends BaseController
{
    public function index()
    {
        $page = '\settings';
        $data = [
            'page'  => $page,
            'model' => model(SettingModel::class),
            'title' => lang('App.settings')
        ];

        $this->setView($data);
    }

    public function post()
    {
        helper(['form']);

        if ($this->request->getMethod(true) == 'POST') 
        {
            $post        = $this->request->getPost();
            $title       = isset($post['title']) ? $post['title'] : '';
            $description = isset($post['description']) ? $post['description'] : '';
            $keywords    = isset($post['keywords']) ? $post['keywords'] : '';
            $author      = isset($post['author']) ? $post['author'] : '';
            $version     = isset($post['version']) ? $post['version'] : '';
            $underrepair = isset($post['underrepair']) ? $post['underrepair'] : '';

            if ($underrepair == 'on') { $underrepair = 1; } else { $underrepair = 0; }

            $data                = array();
            $data['title']       = $title;
            $data['description'] = $description;
            $data['keywords']    = $keywords;
            $data['author']      = $author;
            //$data['icon']        = $icon;
            $data['version']     = $version;
            $data['underrepair'] = $underrepair;

            $model = model(SettingModel::class);
            $func  = $model->edit($data);

            if ($func) {
                session()->setFlashdata('type', 's');
                session()->setFlashdata('msg', lang('App.m_success'));
                $url = base_url() . '/admin/settings';
                return redirect()->to($url);
            } else {
                session()->setFlashdata('type', 'e');
                session()->setFlashdata('msg', lang('App.m_error'));
                $url = base_url() . '/admin/settings';
                return redirect()->to($url);                
            }
        } else {
            $url = base_url() . '/admin/settings';
            return redirect()->to($url);     
        }
    }
}