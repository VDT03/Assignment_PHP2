@extends('layouts.master')

@section('title')
    Xem chi tiết: {{ $new['name'] }}
@endsection

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>TRƯỜNG</th>
                <th>GIÁ TRỊ</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($new as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{!! $value !!}</td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <a href="{{ url('admin/news/') }}">
        <input type="button" value="Return" class="btn btn-primary mt-3">
    </a>

@endsection
