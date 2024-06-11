@extends('layouts.master')

@section('title')
    Xem chi tiết
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-9 mb-5 mb-lg-0">
                    <article>
                        <div class="post-slider mb-4">
                            <img src="{{ asset($newOne['image']) }}" class="card-img" alt="post-thumb">
                        </div>

                        <h1 class="h2">{{ $newOne['title'] }}</h1>
                        <ul class="card-meta my-3 list-inline">

                            <li class="list-inline-item">
                                <i class="ti-calendar"></i>{{ $newOne['created_at'] }}
                            </li>

                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item">
                                        <a href="tags.html">
                                            @php
                                                foreach ($tag as $key => $value) {
                                                    if($newOne['id_tag'] == $value['id']){
                                                        echo $value['name'];
                                                    }
                                                }
                                            @endphp
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="content">
                            <p>
                                {{ $newOne['content'] }}
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </div>

    </section>
@endsection
