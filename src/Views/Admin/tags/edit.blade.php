@extends('layouts.master')

@section('title')
    Cập nhật Tag: {{ $tag['name'] }}
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

    <form action="{{ url("admin/tags/{$tag['id']}/update") }}" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-6">
                
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Tag Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter tag name" value="{{ $tag['name'] }}" name="name">
                </div>
                
            </div>

        </div>

        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        <a href="{{ url('admin/tags/') }}">
            <input type="button" value="Return" class="btn btn-info mt-3">
        </a>
    </form>
@endsection
