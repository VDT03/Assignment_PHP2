@extends('layouts.master')

@section('title')
    Trang Chủ
@endsection

@section('content')
    <section class="section pb-0">
        <div class="container">
            <div class="row">


                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Đề Xuất</h2>
                    @foreach ($suggest as $suggest)
                        <article class="card">
                            <div class="post-slider slider-sm">
                                <img src="{{ asset($suggest['image']) }}" class="card-img-top" alt="post-thumb">
                            </div>

                            <div class="card-body">
                                <h3 class="h4 mb-3">
                                    <a class="post-title" href="{{ url("{$suggest['id']}/detail") }}">
                                        {{ $suggest['title'] }}
                                    </a>
                                </h3>
                                <ul class="card-meta list-inline">

                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $suggest['created_at'] }}
                                    </li>

                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item">
                                                <a>{{ $suggest['name'] }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="{{ url("{$suggest['id']}/detail") }}" class="btn btn-outline-primary">
                                    Xem Chi Tiết
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>


                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Xu Hướng</h2>

                    @foreach ($trend as $trend)
                        <article class="card mb-4">
                            <div class="card-body d-flex">
                                <img class="card-img-sm" src="{{ asset($trend['image']) }}">
                                <div class="ml-3">
                                    <h4>
                                        <a href="{{ url("{$trend['id']}/detail") }}" class="post-title">{{ $trend['title'] }}</a>
                                    </h4>

                                    <ul class="card-meta list-inline mb-0">
                                        <li class="list-inline-item mb-0">
                                            <i class="ti-calendar"></i>{{ $trend['updated_at'] }}
                                        </li>
                                    </ul>

                                    <ul class="card-meta-tag list-inline">
                                        <li class="list-inline-item">
                                            <a>{{ $trend['name'] }}</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </article>
                    @endforeach

                </div>


                <div class="col-lg-4 mb-5">
                    <h2 class="h5 section-title">Mới nhất</h2>
                    @foreach ($lastest as $lastest)
                        <article class="card">
                            <div class="post-slider slider-sm">
                                <img src="{{ asset($lastest['image']) }}" class="card-img-top" alt="post-thumb">
                            </div>
                            <div class="card-body">
                                <h3 class="h4 mb-3">
                                    <a class="post-title" href="{{ url("{$lastest['id']}/detail") }}">
                                        {{ $lastest['title'] }}
                                    </a>
                                </h3>

                                <ul class="card-meta list-inline">

                                    <li class="list-inline-item">
                                        <i class="ti-calendar"></i>{{ $lastest['created_at'] }}
                                    </li>

                                    <li class="list-inline-item">
                                        <ul class="card-meta-tag list-inline">
                                            <li class="list-inline-item">
                                                <a>{{ $lastest['name'] }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <a href="{{ asset('assets/client/post-details.html') }}"
                                    class="btn btn-outline-primary">Xem Chi Tiết</a>
                            </div>
                        </article>
                    @endforeach
                </div>


                <div class="col-12">
                    <div class="border-bottom border-default"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="col-12 mb-5 mb-lg-0">
                        <h2 class="h5 section-title">Bài Đăng Gần Đây</h2>
                        <div class="row">

                            @foreach ($news as $new)
                                <div class="col-lg-4 col-sm-6">
                                    <article class="card mb-4">
                                        <div class="post-slider slider-sm">
                                            <img src="{{ asset($new['image']) }}" width="100px" height="100px"
                                                class="card-img-top" alt="post-thumb">
                                        </div>
                                        <div class="card-body">

                                            <h3 class="h4 mb-3">
                                                <a class="post-title"
                                                    href="{{ url("{$new['id']}/detail") }}">{{ $new['title'] }}
                                                </a>
                                            </h3>

                                            <ul class="card-meta list-inline">

                                                <li class="list-inline-item">
                                                    <i class="ti-calendar"></i>{{ $new['created_at'] }}
                                                </li>

                                                <li class="list-inline-item">
                                                    <ul class="card-meta-tag list-inline">
                                                        <li class="list-inline-item">
                                                            <a>{{ $new['name'] }}</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>

                                            <a href="{{ url("{$new['id']}/detail") }}" class="btn btn-outline-primary">Xem
                                                Chi Tiết
                                            </a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
