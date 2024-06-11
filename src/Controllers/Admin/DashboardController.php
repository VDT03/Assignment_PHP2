<?php

namespace Admin\MvcOop\Controllers\Admin;

use Admin\MvcOop\Commons\Controller;
use Admin\MvcOop\Commons\Helper;
use Admin\MvcOop\Models\News;
use Admin\MvcOop\Models\Tag;
use Admin\MvcOop\Models\User;

class DashboardController extends Controller
{
    private News $new;
    private Tag $tag;
    private User $user;

    public function __construct()
    {
        $this->new = new News();
        $this->tag = new Tag();
        $this->user = new User();
    }

    public function dashboard()
    {
        $news = $this->new->count();
        $tags = $this->tag->count();
        $users = $this->user->count();
        // Helper::debug($news);

        $this->renderViewAdmin(__FUNCTION__, [
            'news' => $news,
            'tags' => $tags,
            'users' => $users,
        ]);
    }
}