@extends('layouts.master')

@section('title')
    Cập nhật Người dùng: {{ $user['user_name'] }}
@endsection

@section('content')
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-warning">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @php
            unset($_SESSION['errors']);
        @endphp
    @endif

    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">{{ $_SESSION['msg'] }}</div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif

    <form action="{{ url("admin/users/{$user['id_user']}/update") }}" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-6">

                <div class="mb-3 mt-3">
                    <label for="category_id" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" value="{{ $user['email'] }}" placeholder="Enter email" name="email">
                </div>
                
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" value="{{ $user['password'] }}" placeholder="Enter password" name="password">
                </div>

                <div class="mb-3 mt-3">
                    <label for="img_thumbnail" class="form-label">User Name:</label>
                    <input type="text" class="form-control" id="user_name" value="{{ $user['user_name'] }}" placeholder="Enter User Name" name="user_name">
                </div>

            </div>

            <div class="col-md-6">

                <div class="mb-3 mt-3">
                    <label for="overview" class="form-label">Role:</label>
                    <input type="text" class="form-control" id="role" value="{{ $user['role'] }}" placeholder="Enter Role: 1 is Admin, 2 is Customer" name="role">
                </div>

                <div class="mb-3 mt-3">
                    <label for="overview" class="form-label">Active:</label>
                    <input type="text" class="form-control" id="is_active" value="{{ $user['is_active'] }}" placeholder="Enter Role: 1 is Admin, 2 is Customer" name="is_active">
                </div>

            </div>

        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>
        <a href="{{ url('admin/users/') }}">
            <input type="button" value="Return" class="btn btn-info mt-5">
        </a>
    </form>
@endsection
