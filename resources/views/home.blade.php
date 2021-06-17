@extends('layout')

@section('title')
    Home
@stop

@section('content')
    <!--====== BANNER PART START ======-->
    <section class="banner-area">
        <div class="banner-item bg_cover" style="background-image: url({{ asset('assets/images/banner-bg.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="banner-content">
                            <h1 data-animation="fadeInLeft" data-delay="0.5s" class="title">Ketti M. Farms</h1>
                            <p data-animation="fadeInLeft" data-delay="0.8s">We set the tone and standards of home grown local, organic and regenerative community</p>
                            <ul data-animation="fadeInUp" data-delay="1.2s">
                                <li><a href="{{ url('about') }}" class="main-btn">see our farm <i class="far fa-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-item bg_cover" style="background-image: url({{ asset('assets/images/banner-bg-2.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="banner-content">
                            <h1 data-animation="fadeInLeft" data-delay="0.5s" class="title">Build Health With Foods</h1>
                            <p data-animation="fadeInLeft" data-delay="0.8s">Since 1990s We Provide Best Food For World Wide</p>
                            <ul data-animation="fadeInUp" data-delay="1.2s">
                                <li><a href="{{ url('about') }}" class="main-btn">see our farm <i class="far fa-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== BANNER PART ENDS ======-->

    <section class="about-us-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <img src="{{ asset('assets/images/about-thumb.jpg') }}" alt="about">
                        <img class="text" src="{{ asset('assets/images/about-text.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content ml-70">
                        <span>About Us</span>
                        <h3 class="title">We Are Best Award Winning Farms</h3>
                        <p>Welcome to Ketti M. Farms very first community supporting agriculture (CSA) farm which been growing food, fun, and community spirit from the ground up for 34 years.<br>
                            We set the tone and standards of home grown local, organic and regenerative community. Our little urban farm has been home for three generations of families sharing the liveliness of our sacred soil’s celebration.</p>
                        <ul>
                            <li>
                                <span><span class="counter">85</span>%</span>
                                <p>Satisfied Customers</p>
                            </li>
                            <li>
                                <span><span class="counter">92</span>%</span>
                                <p>Vegetables Natural Food</p>
                            </li>
                            <li>
                                <span><span class="counter">79</span>%</span>
                                <p>Panning And Growth</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== FEATURES PART START ======-->
    <section class="features-area pt-130 pb-130">
        <div class="features-dot">
            <img src="{{ asset('assets/images/features-dot.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="features-thumb">
                        <img src="{{ asset('assets/images/features-thumb.jpg') }}" alt="features">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="features-content">
                        <span>Our Features</span>
                        <h3 class="title">We Are Best For Your Foods Partners</h3>
                        <div class="row features-active">
                            <div class="col-lg-6">
                                <div class="features-box text-center mt-30">
                                    <i class="flaticon-pumpkin"></i>
                                    <h5 class="title">Organic Food</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="features-box text-center mt-30">
                                    <i class="flaticon-rice"></i>
                                    <h5 class="title">Safe & Trusty</h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="features-box text-center mt-30">
                                    <i class="flaticon-agriculture-1"></i>
                                    <h5 class="title">agricultural</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features-counter-area">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="features-counter mt-30 text-center text-sm-left">
                            <span>Team Member</span>
                            <h3 class="title counter">3698</h3>
                            <i class="far fa-users"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="features-counter item-2 mt-30 text-center text-sm-left">
                            <span>Our Farms</span>
                            <h3 class="title counter">8965</h3>
                            <i class="far fa-leaf"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="features-counter item-3 mt-30 text-center text-sm-left">
                            <span>Win Awards</span>
                            <h3 class="title counter">6579</h3>
                            <i class="far fa-trophy-alt"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="features-counter item-4 mt-30 text-center text-sm-left">
                            <span>Gold Partners</span>
                            <h3 class="title counter">59632</h3>
                            <i class="far fa-coffee"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FEATURES PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    <section class="services-area pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-title text-center">
                        <span>Our Services</span>
                        <h3 class="title">We Provide Awesome Food For Good Health</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-services mt-30">
                        <img src="{{ asset('assets/images/services-1.png') }}" alt="services">
                        <h4 class="title">Fresh Vegetables</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-services mt-30">
                        <img src="{{ asset('assets/images/services-2.png') }}" alt="services">
                        <h4 class="title">Fresh Foods</h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="single-services mt-30">
                        <img src="{{ asset('assets/images/services-3.png') }}" alt="services">
                        <h4 class="title">Fresh Meat</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-icon1">
            <i class="flaticon-lemonade"></i>
        </div>
        <div class="services-icon2">
            <i class="flaticon-vegetable"></i>
        </div>
    </section>
    <!--====== SERVICES PART ENDS ======-->

    <!--====== STORE PART START ======-->
    <section class="store-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                    <div class="store-content">
                        <span>Our Store</span>
                        <h3 class="title">Visit Our Store For Foods</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row store-active">
                        <div class="col-lg-6">
                            <div class="store-item text-center bg-white">
                                <img src="{{ asset('assets/images/store-item-1.png') }}" alt="store">
                                <div class="store-title d-flex justify-content-between align-items-center">
                                    <a href="#"><h5 class="title">Pomegranate</h5></a>
                                    <span><i class="fas fa-heart"></i> (1k)</span>
                                </div>
                                <div class="store-price d-flex justify-content-between align-items-center">
                                    <p>Kg $89.00</p>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="store-item text-center bg-white">
                                <img src="{{ asset('assets/images/store-item-2.png') }}" alt="store">
                                <div class="store-title d-flex justify-content-between align-items-center">
                                    <a href="#"><h5 class="title">Green Broccoli</h5></a>
                                    <span><i class="fas fa-heart"></i> (1k)</span>
                                </div>
                                <div class="store-price d-flex justify-content-between align-items-center">
                                    <p>Kg $89.00</p>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="store-item text-center bg-white">
                                <img src="{{ asset('assets/images/store-item-3.png') }}" alt="store">
                                <div class="store-title d-flex justify-content-between align-items-center">
                                    <a href="#"><h5 class="title">Fresh Tomato</h5></a>
                                    <span><i class="fas fa-heart"></i> (1k)</span>
                                </div>
                                <div class="store-price d-flex justify-content-between align-items-center">
                                    <p>Kg $89.00</p>
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== STORE PART ENDS ======-->

    <!--====== GALLERY PART START ======-->
    <section class="gallery-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title text-center">
                        <span>Our Gallery</span>
                        <h3 class="title">Our Latest Product To Build Health</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mt-30">
                        <div class="gallery-thumb">
                            <img src="{{ asset('assets/images/gallery-1.jpg') }}" alt="gallery">
                        </div>
                        <div class="gallery-content">
                            <h5 class="title">Cow & Meat</h5>
                            <span>Fresh Meat</span>
                            <a href="#"><i class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mt-90">
                        <div class="gallery-thumb">
                            <img src="{{ asset('assets/images/gallery-2.jpg') }}" alt="gallery">
                        </div>
                        <div class="gallery-content">
                            <h5 class="title">Natural Vegetable</h5>
                            <span>Vegetables Organic</span>
                            <a href="#"><i class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-item mt-150">
                        <div class="gallery-thumb">
                            <img src="{{ asset('assets/images/gallery-3.jpg') }}" alt="gallery">
                        </div>
                        <div class="gallery-content">
                            <h5 class="title">Fresh Rice</h5>
                            <span>Fresh Meat</span>
                            <a href="#"><i class="far fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-btn text-center mt-80">
                        <a class="main-btn" href="{{ url('gallery') }}">see more gallery <i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-1">
            <img src="{{ asset('assets/images/shape/shape-1.png') }}" alt="">
        </div>
        <div class="shape-2">
            <img src="{{ asset('assets/images/shape/shape-2.png') }}" alt="">
        </div>
    </section>
    <!--====== GALLERY PART ENDS ======-->

    <section class="about-us-3-area pb-130">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6 col-md-8">
                    <div class="about-us-content">
                        <h3 class="title">Our CEO</h3>
                        <p>Kattie M. Campbell, Our CEO and Livestock investor, explores how agricultural innovation is contributing to Zurich farmers combat climate challenges on her 13,000-acre farm.</p>
                        <p>Kattie M. Campbell had a remarkable educational experience in Management and Agriculture. He studied Business Administration in HWZ University of Applied Sciences, Zurich. She got her Bachelor's degree in Business Administration and Management and a Masters degree in Agricultural Business and Management.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape text-right">
            <img src="{{ asset('assets/images/shape/shape-5.png') }}" alt="shape">
        </div>
    </section>

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

    <!--====== QUESTIONS PART START ======-->
    <div class="questions-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="questions-box">
                        <div class="row justify-content-end">
                            <div class="col-lg-8">
                                <div class="questions-box-item">
                                    <div class="item">
                                        <h3 class="title"><span>Have Any Questions ?</span> Call Us +1(682) 214-3361</h3>
                                        <i class="far fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== QUESTIONS PART ENDS ======-->
@stop
