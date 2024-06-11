<?php

namespace Admin\MvcOop\Controllers\Admin;

use Admin\MvcOop\Commons\Controller;
use Admin\MvcOop\Models\User;
use Rakit\Validation\Validator;
use Admin\MvcOop\Commons\Helper;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();

        $this->renderViewAdmin('users.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        $this->renderViewAdmin('users.create',);
    }

    public function store()
    {
        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'email'          => 'required|email',
            'password'       => 'required|min:6',
            'user_name'      => 'required',
            'role'           => 'required',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url('admin/users/create'));
            exit;
        } else {
            $data = [
                'email'         =>  $_POST['email'],
                'password'      =>  $_POST['password'],
                'user_name'     =>  $_POST['user_name'],
                'role'          =>  $_POST['role'],
            ];

            $this->user->insert($data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url('admin/users'));
            exit;
        }
    }

    public function show($id)
    {
        $user = $this->user->findByID($id);

        $this->renderViewAdmin('users.show', [
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $user = $this->user->findByID($id);

        $this->renderViewAdmin('users.edit', [
            'user' => $user,
        ]);
    }

    public function update($id)
    {

        // VALIDATE
        $validator = new Validator;
        $validation = $validator->make($_POST, [
            'email'          => 'required|email',
            'password'       => 'required|min:6',
            'user_name'      => 'required',
            'role'           => 'required',
            'is_active'      => 'required',
        ]);
        $validation->validate();

        if ($validation->fails()) {
            $_SESSION['errors'] = $validation->errors()->firstOfAll();

            header('Location: ' . url("admin/users/$id/edit"));
            exit;
        } else {
            $data = [
                'email'         => $_POST['email'],
                'password'      => $_POST['password'],
                'user_name'     => $_POST['user_name'],
                'role'          => $_POST['role'],
                'is_active'     => $_POST['is_active'],
            ];

            $this->user->update($id, $data);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';

            header('Location: ' . url("admin/users/$id/edit"));
            exit;
        }
    }

    public function delete($id)
    {
        try {

            $this->user->delete($id);

            $_SESSION['status'] = true;
            $_SESSION['msg'] = 'Thao tác thành công!';
        } catch (\Throwable $th) {
            $_SESSION['status'] = false;
            $_SESSION['msg'] = 'Thao tác KHÔNG thành công!';
        }

        header('Location: ' . url('admin/users'));
        exit();
    }
}