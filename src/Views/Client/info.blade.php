@extends('layouts.master')

@section('title')
    Thông tin sinh viên
@endsection

@section('content')

    <section class="section-sm">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
                    <div class="image-wrapper">
                        <img class="img-fluid w-100" src="{{ asset('assets/client/images/tai-vu.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="content pl-lg-3 pl-0">
                        <h2 id="helllo-im-richi-andorn-im-a-biography-based-researcher-and-author">
                            Xin chào, tôi tên là Vũ Đức Tài.<br> Đang là sinh viên trường cao đẳng FPT Polytechnich.
                        </h2>
                        <p>
                            <br>
                            Kỳ: 5<br>
                            Chuyên ngành: Lập trình web back-end<br>
                            Mã sinh viên: PH45387
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2>Educational Qualification <br> That I Have Gathered</h2>
                </div>

                <div class="col-lg-3 col-sm-6 text-center mb-4">
                    <h3 class="border-bottom pb-3 mb-3 mx-2">BEng Electronic Engineering</h3>
                    <p class="mb-2">September 2000 - May 2004</p>
                    <p>University Of California</p>
                </div>

                <div class="col-lg-3 col-sm-6 text-center mb-4">
                    <h3 class="border-bottom pb-3 mb-3 mx-2">MSc in Research Methodology</h3>
                    <p class="mb-2">September 2000 - May 2004</p>
                    <p>University Of California</p>
                </div>

                <div class="col-lg-3 col-sm-6 text-center mb-4">
                    <h3 class="border-bottom pb-3 mb-3 mx-2">BEng Electronic Engineering</h3>
                    <p class="mb-2">September 2000 - May 2004</p>
                    <p>University Of California</p>
                </div>

                <div class="col-lg-3 col-sm-6 text-center mb-4">
                    <h3 class="border-bottom pb-3 mb-3 mx-2">MSc in Research Methodology</h3>
                    <p class="mb-2">September 2000 - May 2004</p>
                    <p>University Of California</p>
                </div>

            </div>
        </div>
    </section> --}}

@endsection
