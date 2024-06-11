@extends('layouts.master')

@section('title')
    Cập nhật Tin Tức: {{ $new['title'] }}
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

    <form action="{{ url("admin/news/{$new['id']}/update") }}" enctype="multipart/form-data" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3 mt-3">
                    <label for="id_tag" class="form-label">Tag:</label>
        
                    <select name="id_tag" id="id_tag" class="form-select">
                        @foreach ($tagPluck as $id => $name)
                            <option 
                                @if ($new['id_tag'] == $id)
                                    selected
                                @endif
                                value="{{ $id }}">{{ $name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" value="{{ $new['title'] }}" name="title">
                </div>
                <div class="mb-3 mt-3">
                    <label for="img_thumbnail" class="form-label">Image:</label>
                    <input type="file" class="form-control" id="image" placeholder="Enter Image" name="image">
                    <img src="{{ asset($new['image']) }}" width="100px" alt="">
                </div>
            </div>

            <div class="col-md-6">

                <div class="mb-3 mt-3">
                    <label for="content" class="form-label">Content:</label>
                    <textarea class="form-control" id="content" rows="8" placeholder="Enter content" name="content">{{ $new['content'] }}</textarea>
                </div>

            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Submit</button>
        <a href="{{ url('admin/news/') }}">
            <input type="button" value="Return" class="btn btn-info mt-5">
        </a>
    </form>
@endsection
