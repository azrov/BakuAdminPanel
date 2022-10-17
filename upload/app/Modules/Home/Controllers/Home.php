<?php 

namespace App\Modules\Home\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $page  = '\welcome';
        $data  = [
            'page'  => $page,
            'title' => $this->getTitle()
        ];

        $this->setView($data);
    }

    public function lang()
    {
        $locale = $this->request->getLocale();
        $url    = base_url() . '/home';

        return $this->response
        ->setCookie('locale', $this->app->vEncode($locale), $this->expire)
        ->send()->redirect($url);
    }

    public function logout()
    {
        $url = base_url() . '/home';
        return $this->response
            ->deleteCookie('id')
            ->deleteCookie('name')
            ->deleteCookie('email')
            ->deleteCookie('avatar')
            ->deleteCookie('role')
            ->deleteCookie('isLoggedIn')
            ->send()->redirect($url);
    }
}