<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Libraries\App;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    protected $expire  = 60 * 60 * 24 * 14; // 2 Week
    protected $cdn     = 'https://azrov.github.io/cdn/baku/admin/'; // GitHub
    protected $app;
    
    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->app = new App();

        $language = \Config\Services::language();
        $language->setLocale($this->getLang());
    }

    public function getLang()
    {
        $lang   = $this->app->getVar('locale');

        if ($lang == '') {
            return 'en'; // Default
        } else {
            return $lang;  
        } 
    }

    public function getUnRepair()
    {
        return $this->app->getUnRepair();
    }

    public function getTitle()
    {
        return $this->app->getTitle();
    }

    public function setView($data)
    {
        $view = [
            'show'  => $this->getUnRepair(),
            'lang'  => $this->getLang(),
            'cdn'   => $this->cdn,
            'app'   => $this->app
        ];

        echo view('admin/start', $data + $view);
    }
}