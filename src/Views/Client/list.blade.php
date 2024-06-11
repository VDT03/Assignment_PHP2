@extends('layouts.master')

@section('title')
    Danh sách sản phẩm
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                {{-- <div class="col-lg-10 mb-4">
                    <h1 class="h2 mb-4">Search results for
                        <mark>Use+apples+to+give+your+bakes+caramel</mark>
                    </h1>
                </div> --}}
                <div class="col-lg-10">

                    @foreach ($news as $new)
                        <article class="card mb-4">
                            <div class="row card-body">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <div class="post-slider slider-sm">
                                        <img src="{{ asset($new['image']) }}" class="card-img"
                                            alt="post-thumb" style="height:200px; object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-md-8">

                                    <h3 class="h4 mb-3">
                                        <a class="post-title" href="{{ url("{$new['id']}/detail") }}">
                                            {{ $new['title'] }}
                                        </a>
                                    </h3>

                                    <ul class="card-meta list-inline">

                                        <li class="list-inline-item">
                                            <i class="ti-calendar"></i>{{ $new['created_at'] }}
                                        </li>
                                        <li class="list-inline-item">
                                            <ul class="card-meta-tag list-inline">
                                                <li class="list-inline-item"><a>{{ $new['name'] }}</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                    <a href="{{ url("{$new['id']}/detail") }}" class="btn btn-outline-primary">Xem Chi Tiết</a>
                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
