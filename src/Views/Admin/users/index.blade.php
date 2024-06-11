@extends('layouts.master')

@section('title')
    Quản lý Người Dùng
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h1 class="m-0">Danh Sách</h1>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">

                    <div class="table-responsive">
                        @if (isset($_SESSION['status']) && $_SESSION['status'])
                            <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

                            @php
                                unset($_SESSION['status']);
                                unset($_SESSION['msg']);
                            @endphp
                        @endif

                        @if (isset($_SESSION['status']) && !$_SESSION['status'])
                            <div class="alert alert-warning">{{ $_SESSION['msg'] }}</div>

                            @php
                                unset($_SESSION['status']);
                                unset($_SESSION['msg']);
                            @endphp
                        @endif

                        <a href="{{ url('admin/users/create') }}" class="btn btn-primary">Thêm mới</a>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>EMAIL</th>
                                    <th>PASSWORD</th>
                                    <th>USER NAME</th>
                                    <th>ROLE</th>
                                    <th>ACTIVE STATUS</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user['id_user'] }}</td>
                                        <td>{{ $user['email'] }}</td>
                                        <td>{{ $user['password'] }}</td>
                                        <td>{{ $user['user_name'] }}</td>
                                        <td>{{ $user['role'] }}</td>
                                        <td>{{ $user['is_active'] }}</td>
                                        <td>
                                            <a href="{{ url("admin/users/{$user['id_user']}/show") }}"
                                                class="btn btn-info">Xem</a>
                                            <a href="{{ url("admin/users/{$user['id_user']}/edit") }}"
                                                class="btn btn-warning">Sửa</a>
                                            <a href="{{ url("admin/users/{$user['id_user']}/delete") }}"
                                                onclick="return confirm('Chắc chắn xóa không?');"
                                                class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
