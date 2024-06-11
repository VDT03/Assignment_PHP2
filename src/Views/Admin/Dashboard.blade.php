@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page_title_box d-flex align-items-center justify-content-between">
                <div class="page_title_left">
                    <h3 class="f_s_30 f_w_700 text_color_6">Thống Kê</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row ">

        <div class="col-lg-4">
            <div class="white_card card_height_100 default_border_1px  mb_20">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Tổng quát</h3>
                        </div>

                    </div>
                </div>

                <div class="white_card_body">

                    <div class="single_update_news">
                        <h5 class="byer_name  f_s_16 f_w_600 color_theme2">TAG</h5>
                        <p class="color_gray f_s_12 f_w_700 ">Tổng số tag có trong database: {{ $tags }} bản ghi</p>
                    </div>

                    <div class="single_update_news">
                        <h5 class="byer_name  f_s_16 f_w_600 color_theme2">TIN TỨC</h5>
                        <p class="color_gray f_s_12 f_w_700 ">Tổng số tin tức có trong database: {{ $news }} bản ghi</p>
                    </div>

                    <div class="single_update_news">
                        <h5 class="byer_name  f_s_16 f_w_600 color_theme2">NGƯỜI DÙNG</h5>
                        <p class="color_gray f_s_12 f_w_700 ">Tổng số tài khoản có trong database: {{ $users }} bản ghi</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
