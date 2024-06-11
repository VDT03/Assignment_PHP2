<?php 

namespace Admin\MvcOop\Controllers\Client;

use Admin\MvcOop\Commons\Controller;

class InfoController extends Controller
{
    public function index() {

        $this->renderViewClient('info');
    }
}