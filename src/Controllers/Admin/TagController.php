<?php

namespace Admin\MvcOop\Controllers\Admin;

use Admin\MvcOop\Commons\Controller;
use Admin\MvcOop\Commons\Helper;
use Admin\MvcOop\Models\Tag;
use Rakit\Validation\Validator;


class TagController extends Controller
{
    private Tag $tag;

    public function __construct()
    {
        $this->tag = new Tag();
    }

    public function index()
    {
        $tags = $this->tag->all();

        $this->renderViewAdmin('tags.index', [
            'tags' => $tags
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('tags.create',);
    }

    public function store()
    {
        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name'           => 'required',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/tags/create'));
            exit;
        } else {
            $data = [
                'name'   =>  $_POST['name'],
            ];

            $this->tag->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/tags'));
            exit;
        }
    }

    public function show($id)
    {
        $tag = $this->tag->findByID($id);

        $this->renderViewAdmin('tags.show', [
            'tag' => $tag
        ]);
    }

    public function edit($id)
    {
        $tag = $this->tag->findByID($id);

        $this->renderViewAdmin('tags.edit', [
            'tag' => $tag,
        ]);
    }

    public function update($id)
    {

        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'name'   =>  'required',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/tags/$id/edit"));
            exit;
        } else {
            $data = [
                'name'   => $_POST['name'],
            ];

            $this->tag->update($id, $data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/tags/$id/edit"));
            exit;
        }
    }

    public function delete($id)
    {
        try {

            $this->tag->delete($id);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/tags'));
        exit();
    }
}