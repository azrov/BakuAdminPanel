<?php

namespace App\Controllers;

class App extends BaseController
{
    public function index()
    {
        $url = base_url() . '/home';
        return redirect()->to($url);
    }

    public function lang()
    {
        $locale = $this->request->getLocale();
        $url    = base_url() . '/home';

        return $this->response
        ->setCookie('locale', $this->app->vEncode($locale), $this->expire)
        ->send()->redirect($url);
    }
}