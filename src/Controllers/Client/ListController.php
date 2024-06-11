<?php 

namespace Admin\MvcOop\Controllers\Client;

use Admin\MvcOop\Commons\Controller;
use Admin\MvcOop\Models\News;

class ListController extends Controller
{

    private News $new;

    public function __construct()
    {
        $this->new = new News();
    }

    public function index() {
        $news = $this->new->all();

        $this->renderViewClient('list',[
            'news' => $news,
        ]);
    }
}