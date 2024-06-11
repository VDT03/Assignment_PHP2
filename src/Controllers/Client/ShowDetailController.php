<?php 

namespace Admin\MvcOop\Controllers\Client;

use Admin\MvcOop\Commons\Controller;
use Admin\MvcOop\Commons\Helper;
use Admin\MvcOop\Models\News;
use Admin\MvcOop\Models\Tag;

class ShowDetailController extends Controller
{

    private News $new;
    private Tag $tag;

    public function __construct()
    {
        $this->new = new News();
        $this->tag = new Tag();
    }

    public function show($id) {

        $newOne = $this->new->findByID($id);
        $tag = $this->tag->all();
        // Helper::debug($tag);die;

        $this->renderViewClient('showdetail', [
            'newOne' => $newOne,
            'tag' => $tag
        ]);
    }
}