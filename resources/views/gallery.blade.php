@extends('layout')

@section('title')
    Gallery
@stop

@section('content')
    <section class="page-title-area bg_cover d-flex align-items-center"
             style="background-image: url({{ asset('assets/images/page-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h3 class="title">Our Gallery</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Our Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="gallery-page-area pb-130">
        <div class="container-fluid">
            <div class="row grid" style="position: relative; height: 466.334px;">
                <div class="col-lg-3 col-sm-6 col-md-6 cat-1 cat-2 cat-4" style="position: absolute; left: 0px; top: 0px;">
                    <div class="gallery-item mt-30">
                        <img src="{{ asset('assets/images/gallery-item-1.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 cat-2 cat-3" style="position: absolute; left: 244.333px; top: 0px;">
                    <div class="gallery-item mt-30">
                        <img src="{{ asset('assets/images/gallery-item-2.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 cat-1 cat-3 cat-4" style="position: absolute; left: 488.666px; top: 0px;">
                    <div class="gallery-item mt-30">
                        <img src="{{ asset('assets/images/gallery-item-3.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 cat-2 cat-4" style="position: absolute; left: 732.999px; top: 0px;">
                    <div class="gallery-item mt-30">
                        <img src="{{ asset('assets/images/gallery-item-4.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 cat-1 cat-3" style="position: absolute; left: 0px; top: 233.167px;">
                    <div class="gallery-item mt-30">
                        <img src="{{ asset('assets/images/gallery-item-5.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 cat-2 cat-4" style="position: absolute; left: 244.333px; top: 233.167px;">
                    <div class="gallery-item mt-30">
                        <img src="{{ asset('assets/images/gallery-item-6.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 cat-1 cat-3" style="position: absolute; left: 488.666px; top: 233.167px;">
                    <div class="gallery-item mt-30">
                        <img src="{{ asset('assets/images/gallery-item-7.jpg') }}" alt="gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 cat-2 cat-4" style="position: absolute; left: 732.999px; top: 233.167px;">
                    <div class="gallery-item mt-30">
                        <img src="{{ asset('assets/images/gallery-item-8.jpg') }}" alt="gallery">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== FARMS PART START ======-->
    <section class="farms-area d-flex align-items-center bg_cover" style="background-image: url({{ asset('assets/images/farms.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="farms-content">
                        <span>Looking Organic Food ?</span>
                        <h3 class="title">Want To  Fresh & Organic Food</h3>
                        <a class="main-btn" href="#">visit our farms <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FARMS PART ENDS ======-->

    <!--====== SPONSOR PART START ======-->
    <section class="sponsor-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sponsor-box">
                        <span>Best Sponsor</span>
                        <h3 class="title">Our World Wide Partnership</h3>
                        <ul class="d-flex justify-content-between">
                            <li><img src="{{ asset('assets/images/brand-1.png') }}" alt="brand"></li>
                            <li><img src="{{ asset('assets/images/brand-2.png') }}" alt="brand"></li>
                            <li><img src="{{ asset('assets/images/brand-3.png') }}" alt="brand"></li>
                        </ul>
                        <ul class="d-flex justify-content-between">
                            <li><img src="{{ asset('assets/images/brand-4.png') }}" alt="brand"></li>
                            <li><img src="{{ asset('assets/images/brand-5.png') }}" alt="brand"></li>
                            <li><img src="{{ asset('assets/images/brand-6.png') }}" alt="brand"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="newsletters-box">
                        <span>Newsletters</span>
                        <h3 class="title">Subscribe Our Newsletters</h3>
                        <form action="#">
                            <div class="input-box mb-20">
                                <input type="email" placeholder="Enter Email Address ">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <button class="main-btn">subscribe now <i class="far fa-plus"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== SPONSOR PART ENDS ======-->
@stop
