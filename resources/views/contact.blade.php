@extends('layout')

@section('title')
    Contact us
@stop

@section('content')
    <section class="page-title-area bg_cover d-flex align-items-center" style="background-image: url({{ asset('assets/images/page-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content">
                        <h3 class="title">Contact Us</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-massage-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-massage">
                        <div class="row justify-content-end">
                            <div class="col-lg-8">
                                <div class="contact-massage-item ml-35">
                                    <form id="contact-form" action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="massage-title">
                                                    <h3 class="title">Leave A Message</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-box item-1 mt-20">
                                                    <input type="text" placeholder="Your Full Name">
                                                    <i class="far fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="input-box item-2 mt-20">
                                                    <input type="email" placeholder="Your Email">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-box mt-20">
                                                    <input type="text" placeholder="Your Subject">
                                                    <i class="far fa-edit"></i>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="input-box mt-20">
                                                    <textarea name="#" id="#" cols="30" rows="10" placeholder="Write Message"></textarea>
                                                    <i class="far fa-pen"></i>
                                                    <button type="submit" class="main-btn" href="#">send message <i class="far fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-message"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="contact-info-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="contact-info-item text-center">
                                    <i class="fal fa-map-marked-alt"></i>
                                    <ul>
                                        <li>Zurich, Switzerland</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-info-item text-center">
                                    <i class="fal fa-envelope"></i>
                                    <ul>
                                        <li>info@kcmfarms.com</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-info-item text-center">
                                    <i class="fal fa-phone"></i>
                                    <ul>
                                        <li>+1(682) 214-3361</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d65591.5120359833!2d90.37279590551098!3d23.73981299163866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1583607237227!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" width="600" height="450"></iframe>
        </div>
    </div>
@stop
