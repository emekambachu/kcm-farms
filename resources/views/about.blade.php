@extends('layout')

@section('title')
    About
@stop

@section('content')
    <section class="page-title-area bg_cover d-flex align-items-center" style="background-image: url({{ asset('assets/images/page-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-title-content">
                        <h3 class="title">About Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                            We set the tone and standards of home grown local, organic and regenerative community. Our little urban farm has been home for three generations of families sharing the liveliness of our sacred soil’s celebration.<br>
                            Helping farmers to emerging markets maximize their profits. We use agronomic machine learning, remote sensing, and mobile phones to deliver financing, farm products. Customized advice to smallholder farmers with radical efficiency and scalability agricultural methods used.</p>
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

    <section class="what-we-do-2-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title text-center">
                        <span>What We Do</span>
                        <h3 class="title">We Provide Awesome Food For Good Health</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-7 col-sm-9">
                    <div class="services-box">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="services-item mt-30">
                                    <div class="services-thumb">
                                        <img src="{{ asset('assets/images/services-4.jpg') }}" alt="services">
                                    </div>
                                    <div class="services-content text-center">
                                        <h4 class="title">Fresh Vegetables</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="services-item mt-30">
                                    <div class="services-thumb">
                                        <img src="{{ asset('assets/images/services-5.jpg') }}" alt="services">
                                    </div>
                                    <div class="services-content text-center">
                                        <h4 class="title">Organic Fruits</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="services-item mt-30">
                                    <div class="services-thumb">
                                        <img src="{{ asset('assets/images/services-6.jpg') }}" alt="services">
                                    </div>
                                    <div class="services-content text-center">
                                        <h4 class="title">Fresh Meat</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-area gallery-3-area">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="section-title text-left">
                        <h3 class="title">Why Choose us?</h3>
                        <p>Before agriculture became widespread, people spent most of their lives searching for food—hunting wild animals and gathering wild plants. About 11,500 years ago, people gradually learned how to grow cereal and root crops, and settled down to a life based on farming, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    </div>
                </div>
            </div>
            <div class="row gallery-active slick-initialized slick-slider"><span class="prev slick-arrow" style="display: block;"><i class="fal fa-angle-double-left"></i></span>




                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 3520px; transform: translate3d(-1600px, 0px, 0px);"><div class="col-lg-4 slick-slide slick-cloned" style="width: 320px;" data-slick-index="-3" aria-hidden="true" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-5.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Food Health Check</h5>
                                        <span>Food Medical</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide slick-cloned" style="width: 320px;" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-6.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Organic Fresh Food</h5>
                                        <span>Vegetables Organic</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide slick-cloned" style="width: 320px;" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-5.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Food Health Check</h5>
                                        <span>Food Medical</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide" style="width: 320px;" data-slick-index="0" aria-hidden="true" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-4.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Natural Vegetable</h5>
                                        <span>Vegetables Organic</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide" style="width: 320px;" data-slick-index="1" aria-hidden="true" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-5.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Food Health Check</h5>
                                        <span>Food Medical</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide slick-current slick-active" style="width: 320px;" data-slick-index="2" aria-hidden="false" tabindex="0">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-6.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Organic Fresh Food</h5>
                                        <span>Vegetables Organic</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide slick-active" style="width: 320px;" data-slick-index="3" aria-hidden="false" tabindex="0">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-5.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Food Health Check</h5>
                                        <span>Food Medical</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide slick-cloned slick-active" style="width: 320px;" data-slick-index="4" aria-hidden="false" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-4.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Natural Vegetable</h5>
                                        <span>Vegetables Organic</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide slick-cloned" style="width: 320px;" data-slick-index="5" aria-hidden="true" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-5.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Food Health Check</h5>
                                        <span>Food Medical</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide slick-cloned" style="width: 320px;" data-slick-index="6" aria-hidden="true" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-6.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Organic Fresh Food</h5>
                                        <span>Vegetables Organic</span>
                                    </div>
                                </div>
                            </div>
                        </div><div class="col-lg-4 slick-slide slick-cloned" style="width: 320px;" data-slick-index="7" aria-hidden="true" tabindex="-1">
                            <div class="gallery-box mt-30">
                                <img src="{{ asset('assets/images/gallery-5.jpg') }}" alt="gallery">
                                <div class="gallery-overlay d-flex justify-content-center align-items-end">
                                    <div class="item text-center">
                                        <h5 class="title">Food Health Check</h5>
                                        <span>Food Medical</span>
                                    </div>
                                </div>
                            </div>
                        </div></div></div><span class="next slick-arrow" style="display: block;"><i class="fal fa-angle-double-right"></i></span></div>
        </div>
    </section>

    <section class="about-us-3-area pb-130">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6 col-md-8">
                    <div class="about-us-content">
                        <h3 class="title">Our CEO</h3>
                        <p>Kattie M. Campbell, Our CEO and Livestock investor, explores how agricultural innovation is contributing to Zurich farmers combat climate challenges on his 13,000-acre farm.</p>
                        <p>Kattie M. Campbell had a remarkable educational experience in Management and Agriculture. He studied Business Administration in HWZ University of Applied Sciences, Zurich. He got his Bachelor's degree in Business Administration and Management and a Masters degree in Agricultural Business and Management.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape text-right">
            <img src="{{ asset('assets/images/shape/shape-5.png') }}" alt="shape">
        </div>
    </section>
@stop
