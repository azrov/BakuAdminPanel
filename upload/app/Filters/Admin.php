<?php 

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

use App\Libraries\App;

class Admin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $app = new App();

        if (!$app->getRole() == 1) {
            session()->setFlashdata('type', 'w');
            session()->setFlashdata('msg', lang('App.signin_m7'));
            $url = base_url() . '/admin/signin';
            return redirect()->to($url);
        }
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}