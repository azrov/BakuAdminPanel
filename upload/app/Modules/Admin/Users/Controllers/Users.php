<?php 

namespace App\Modules\Admin\Users\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $page  = '\users';
        $model = model(UserModel::class);
        $data  = [
            'page'     => $page,
            'model'    => $model,
            'paginate' => $model->orderBy('id', 'DESC')->paginate(14),
            'pager'    => $model->pager,
            'title'    => lang('App.users')
        ];

        $this->setView($data);
    }

    public function add()
    {
        $page  = '\add';
        $model = model(UserModel::class);
        $data  = [
            'page'  => $page,
            'model' => $model,
            'title' => lang('App.users') . ' | ' . lang('App.add')
        ];

        $this->setView($data);
    }

    public function edit($id)
    {
        $page  = '\edit';
        $model = model(UserModel::class);
        $data  = [
            'page'  => $page,
            'model' => $model,
            'id'    => $id,
            'title' => lang('App.users') . ' | ' . lang('App.edit')
        ];

        $this->setView($data);
    }

    public function delete($id)
    {
        $model = model(UserModel::class);
        $func  = $model->del($id);

        if ($func) {
            session()->setFlashdata('type', 's');
            session()->setFlashdata('msg', lang('App.m_success'));
            $url = base_url() . '/admin/users';
            return redirect()->to($url);
        }
    }

    public function info($id)
    {
        $page  = '\info';
        $model = model(UserModel::class);
        $data  = [
            'page'  => $page,
            'model' => $model,
            'id'    => $id,
            'title' => lang('App.users') . ' | ' . lang('App.info')
        ];

        $this->setView($data);
    }

    public function post()
    {
        helper(['form']);

        if ($this->request->getMethod(true) == 'POST') 
        {
            $post     = $this->request->getPost();
            $func     = isset($post['func']) ? $post['func'] : '';
            $id       = isset($post['id']) ? $post['id'] : '';
            $username = isset($post['username']) ? $post['username'] : '';
            $name     = isset($post['name']) ? $post['name'] : '';
            $surname  = isset($post['surname']) ? $post['surname'] : '';
            $email    = isset($post['email']) ? $post['email'] : '';
            $password = isset($post['password']) ? $post['password'] : '';
            $role     = isset($post['role']) ? $post['role'] : '';
            $avatar   = $this->request->getFile('avatar');

            $model    = model(UserModel::class);
            $info     = $model->getInfo($id);
            
            $data             = array();
            $data['username'] = 'user' . rand(0, 99999);
            $data['name']     = $name;
            $data['surname']  = $surname;
            $data['role']     = intval($role);

            if (!$email == '') {$data['email'] = $email;}

            if (!$password == '') {$data['password'] = md5($password);}

            $validationRule = [
                'userfile' => [
                    'label' => 'Image File',
                    'rules' => 'uploaded[userfile]'
                        . '|is_image[userfile]'
                        . '|mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                        . '|max_size[userfile,50]'
                        . '|max_dims[userfile,150,150]',
                ],
            ];

            if ($avatar == '') {
                if ($func == 1) {
                    $data['avatar'] = 'avatar.jpg';
                } else {
                    $val = $model->getInfo($id);
                    $data['avatar'] = $val[0]['avatar'];
                }
            } else {
                if ($this->validate($validationRule)) {
                    $name = $photo->getRandomName();
                    $photo->move('./uploads/avatar/', $name);
                    $data['avatar'] = $avatar->getName();
                } else {
                    session()->setFlashdata('type', 'e');
                    session()->setFlashdata('msg', lang('App.m_error'));
                    if ($func == 1) {
                        $url = base_url() . '/admin/users/add';
                        return redirect()->to($url); 
                    } else {
                        $url = base_url() . '/admin/users/edit/' . $id;
                        return redirect()->to($url);     
                    }
                }
            }

            if (!$username == '') {$data['username'] = $username;}

            if ($func == 1) {
                $func = $model->save($data);

                if ($func) {
                    session()->setFlashdata('type', 's');
                    session()->setFlashdata('msg', lang('App.m_success'));
                    $url = base_url() . '/admin/users';
                    return redirect()->to($url);
                } else {
                    session()->setFlashdata('type', 'e');
                    session()->setFlashdata('msg', lang('App.m_error'));
                    $url = base_url() . '/admin/users/add';
                    return redirect()->to($url);              
                }
            } elseif ($func == 2) {
                $func = $model->edit($id, $data);

                if ($func) {
                    session()->setFlashdata('type', 's');
                    session()->setFlashdata('msg', lang('App.m_success'));
                    $url = base_url() . '/admin/users';
                    return redirect()->to($url);
                } else {
                    session()->setFlashdata('type', 'e');
                    session()->setFlashdata('msg', lang('App.m_error'));
                    $url = base_url() . '/admin/users/edit/' . $id;
                    return redirect()->to($url);              
                }
            } else {
                $url = base_url() . '/admin/users';
                return redirect()->to($url);
            }
        } else {
            $url = base_url() . '/admin/users';
            return redirect()->to($url);     
        }
    }
}