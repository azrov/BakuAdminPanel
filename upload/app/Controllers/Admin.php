<?php

namespace App\Controllers;

use App\Models\ModuleModel;

class Admin extends BaseController
{
    public function index()
    {
        $page = 'admin';
        $data = [
            'page'  => $page,
            'title' => $this->getTitle()
        ];

        $this->setView($data);
    }

    public function lang()
    {
        session()->setFlashdata('type', 's');
        session()->setFlashdata('msg', lang('App.m_success'));
        $locale = $this->request->getLocale();
        $url    = base_url() . '/admin';

        return $this->response
        ->setCookie('locale', $this->app->vEncode($locale), $this->expire)
        ->send()->redirect($url);
    }

    public function logout()
    {
        session()->setFlashdata('type', 's');
        session()->setFlashdata('msg', lang('App.m_success'));
        $url = base_url() . '/admin/signin';
        return $this->response
            ->deleteCookie('id')
            ->deleteCookie('name')
            ->deleteCookie('email')
            ->deleteCookie('avatar')
            ->deleteCookie('role')
            ->deleteCookie('isLoggedIn')
            ->send()->redirect($url);
    }

    public function signin()
    {
        $page = 'signin';
        $data = [
            'page'  => $page,
            'title' => lang('App.signin')
        ];

        $this->setView($data);
    }

    public function signup()
    {
        $page = 'signup';
        $data = [
            'page'  => $page,
            'title' => lang('App.signup')
        ];

        $this->setView($data);
    }

    public function modules()
    {
        $page  = 'modules';
        $model = model(ModuleModel::class);
        $data  = [
            'page'     => $page,
            'model'    => $model,
            'paginate' => $model->paginate(),
            'pager'    => $model->pager,
            'title'    => lang('App.modules')
        ];

        $this->setView($data);
    }

    public function signin_post()
    {
        helper(['form']);

        if ($this->request->getMethod(true) == 'POST') 
        {
            $post     = $this->request->getPost();
            $email    = isset($post['email']) ? $post['email'] : '';
            $password = isset($post['password']) ? $post['password'] : '';

            $model    = model(UserModel::class);
            $data     = $model->where('email', $email)->first();

            if ($data) {
                $pass = $data['password'];
                $authenticatePassword = $this->app->vPassword($password, $pass); 

                if ($authenticatePassword) {
                    $url = base_url() . '/admin/dashboard';
                    session()->setFlashdata('type', 's');
                    session()->setFlashdata('msg', lang('App.m_success'));
                    return $this->response
                        ->setCookie('id', $this->app->vEncode($data['id']), $this->expire)
                        ->setCookie('name', $this->app->vEncode($data['name']), $this->expire)
                        ->setCookie('email', $this->app->vEncode($data['email']), $this->expire)
                        ->setCookie('avatar', $this->app->vEncode($data['avatar']), $this->expire)
                        ->setCookie('role', $this->app->vEncode($data['role']), $this->expire)
                        ->setCookie('isLoggedIn', $this->app->vEncode(true), $this->expire)
                        ->send()->redirect($url); 
                } else {
                    session()->setFlashdata('type', 'w');
                    session()->setFlashdata('msg', lang('App.signin_m6'));

                    $url = base_url() . '/admin/signin';
                    return redirect()->to($url);
                }
            } else {
                session()->setFlashdata('type', 'e');
                session()->setFlashdata('msg', lang('App.signin_m5'));
                $url = base_url() . '/admin/signin';
                return redirect()->to($url);
            }
        } else {
            $url = base_url() . '/admin/signin';
            return redirect()->to($url);     
        }
    }

    public function signup_post()
    {
        helper(['form']);

        if ($this->request->getMethod(true) == 'POST') 
        {
            $post     = $this->request->getPost();
            $name     = isset($post['name']) ? $post['name'] : '';
            $surname  = isset($post['surname']) ? $post['surname'] : '';
            $email    = isset($post['email']) ? $post['email'] : '';
            $password = isset($post['password']) ? $post['password'] : '';

            $model    = model(UserModel::class);

            $data             = array();
            $data['role']     = 3;
            $data['name']     = $name;
            $data['surname']  = $surname;
            $data['username'] = 'user' . rand(0, 99999);
            $data['email']    = $email;
            $data['password'] = md5($password);
            $data['avatar']   = 'avatar.jpg';

            $func = $model->save($data);

            if ($func) {
                session()->setFlashdata('type', 's');
                session()->setFlashdata('msg', lang('App.signup_m4'));
                $url = base_url() . '/admin/signin';
                return redirect()->to($url);
            } else {
                session()->setFlashdata('type', 'e');
                session()->setFlashdata('msg', lang('App.signup_m5'));
                $url = base_url() . '/admin/signup';
                return redirect()->to($url);              
            }
        } else {
            $url = base_url() . '/admin/signup';
            return redirect()->to($url);     
        }
    }
}