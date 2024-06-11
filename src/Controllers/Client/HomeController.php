<?php 

namespace Admin\MvcOop\Controllers\Client;

use Admin\MvcOop\Commons\Controller;
use Admin\MvcOop\Commons\Helper;
use Admin\MvcOop\Models\News;
use Admin\MvcOop\Models\Tag;

class HomeController extends Controller
{

    private News $new;
    private Tag $tag;

    public function __construct()
    {
        $this->new = new News();
        $this->tag = new Tag();
    }

    public function index() {

        $news = $this->new->all();
        $suggest = $this->new->suggest();
        $lastest = $this->new->lastest();
        $trend = $this->new->trend();
        // Helper::debug($trend);

        $this->renderViewClient('home',[
            'news' => $news,
            'suggest' => $suggest,
            'lastest' => $lastest,
            'trend' => $trend
        ]);
    }
}