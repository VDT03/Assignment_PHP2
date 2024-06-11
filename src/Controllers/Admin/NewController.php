<?php

namespace Admin\MvcOop\Controllers\Admin;

use Admin\MvcOop\Commons\Controller;
use Admin\MvcOop\Models\News;
use Admin\MvcOop\Models\Tag;
use Rakit\Validation\Validator;
use Admin\MvcOop\Commons\Helper;

class NewController extends Controller
{
    private News $new;
    private Tag $tag;

    public function __construct()
    {
        $this->new = new News();
        $this->tag = new Tag();
    }

    public function index()
    {
        $news = $this->new->all();

        $this->renderViewAdmin('news.index', [
            'news' => $news
        ]);
    }

    public function create()
    {
        $tags = $this->tag->all();

        $tagPluck = array_column($tags, 'name', 'id');

        $this->renderViewAdmin('news.create', [
            'tagPluck' => $tagPluck
        ]);

    }

    public function store()
    {
        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'id_tag'            => 'required',
            'title'             => 'required|max:200',
            'content'           => 'required|max:20000',
            'image'             => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/news/create'));
            exit;
        } else {
            $data = [
                'id_tag'        => $_POST['id_tag'],
                'title'         => $_POST['title'],
                'content'       => $_POST['content'],
            ];

            if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {

                $from = $_FILES['image']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['image']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['image'] = $to;
                } else {
                    $_SESSION['errors']['image'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url('admin/news/create'));
                    exit;
                }
            }

            $this->new->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/news'));
            exit;
        }
    }

    public function show($id)
    {
        $new = $this->new->findByID($id);

        $this->renderViewAdmin('news.show', [
            'new' => $new
        ]);
    }

    public function edit($id)
    {
        $new = $this->new->findByID($id);
        $tag = $this->tag->all();

        $tagPluck = array_column($tag, 'name', 'id');

        $this->renderViewAdmin('news.edit', [
            'new' => $new,
            'tagPluck' => $tagPluck,
        ]);
    }

    public function update($id)
    {
        $new = $this->new->findByID($id);

        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST + $_FILES, [
            'id_tag'            => 'required',
            'title'             => 'required|max:200',
            'content'           => 'required|max:20000',
            'image'             => 'uploaded_file:0,2048K,png,jpeg,jpg',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/news/$id/edit"));
            exit;
        } else {
            $data = [
                'id_tag'        => $_POST['id_tag'],
                'title'         => $_POST['title'],
                'content'       => $_POST['content'],
            ];

            if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {

                $from = $_FILES['image']['tmp_name'];
                $to   = 'assets/uploads/' . time() . $_FILES['image']['name'];

                if (move_uploaded_file($from, PATH_ROOT . $to)) {
                    $data['image'] = $to;
                } else {
                    $_SESSION['errors']['image'] = 'Upload KHÔNG thành công!';

                    header('Location: ' . url("admin/news/$id/edit"));
                    exit;
                }
            }

            $this->new->update($id, $data);

            if ($new['image'] && file_exists( PATH_ROOT . $new['image'] ) ) {
                unlink(PATH_ROOT . $new['image']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/news/$id/edit"));
            exit;
        }
    }

    public function delete($id)
    {
        try {
            $new = $this->new->findByID($id);

            $this->new->delete($id);

            if ($new['image'] && file_exists( PATH_ROOT . $new['image'] ) ) {
                unlink(PATH_ROOT . $new['image']);
            }

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/news'));
        exit();
    }
}