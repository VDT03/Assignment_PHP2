@extends('layouts.master')

@section('title')
    Thêm mới Người Dùng
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

    <form action="{{ url('admin/users/store') }}" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-6">

                <div class="mb-3 mt-3">
                    <label for="category_id" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                
            </div>

            <div class="col-md-6">

                <div class="mb-3 mt-3">
                    <label for="img_thumbnail" class="form-label">User Name:</label>
                    <input type="text" class="form-control" id="user_name" placeholder="Enter User Name" name="user_name">
                </div>

                <div class="mb-3 mt-3">
                    <label for="overview" class="form-label">Role:</label>
                    <input type="text" class="form-control" id="role" placeholder="Enter Role: 1 is Admin, 2 is Customer" name="role">
                </div>

            </div>
        </div>
        
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
        <a href="{{ url('admin/users/') }}">
            <input type="button" value="Return" class="btn btn-info mt-5">
        </a>
    </form>
@endsection
