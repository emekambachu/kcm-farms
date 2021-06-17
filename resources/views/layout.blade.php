<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>@yield('title') - Ketti M. Campbell Farms</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('kcm_farms_logoonly.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">

    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.html') }}">

    <!--====== animate css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>

<!--====== PRELOADER PART START ======-->

<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>
<!--====== PRELOADER PART ENDS ======-->

<!--====== Sidebar Modal PART START ======-->

<div class="sidebar-modal">
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="far fa-times"></i>
                            </span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('kcm_farms_logo.png') }}" alt="Logo">
                        </a>
                    </h2>
                </div>
                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">About Us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, asperiores doloribus eum laboriosam praesentium delectus unde magni aut perspiciatis cumque deserunt dolore voluptate, autem pariatur? Dicta pariatur.</p>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Contact Info</h3>
                        <ul class="contact-info">
                            <li>
                                <i class="far fa-map-marker-alt"></i>
                                Address
                                <span>205 Fida Walinton, Tongo Street Front The USA</span>
                            </li>
                            <li>
                                <i class="far fa-envelope"></i>
                                Email
                                <span>info@kcmfarms</span>
                            </li>
                            <li>
                                <i class="far fa-phone"></i>
                                Phone
                                <span>+1(682) 214-3361</span>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Connect With Us</h3>
                        <ul class="social-list">
                            <li>
                                <a href="#">
                                    <i class='fab fa-facebook-f'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='fab fa-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='fab fa-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='fab fa-google-plus-g'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='fab fa-linkedin-in'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== Sidebar Modal PART START ======-->

<!--====== HEADER PART START ======-->

<header class="header-area">

    <div class="header-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-info-item">
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="{{ asset('kcm_farms_logo.png') }}" width="180" alt="logo"></a>
                        </div>
                        <div class="header-info d-lg-flex d-none">
                            <div class="item">
                                <i class="fal fa-phone"></i>
                                <span>Phone Number</span>
                                <a href="tel:+12345678999">
                                    <h5 class="title">+1(682) 214-3361</h5>
                                </a>
                            </div>
                            <div class="item">
                                <i class="fal fa-envelope-open"></i>
                                <span>Email Address</span>
                                <a href="mailto:support@gmail.com">
                                    <h5 class="title">info@kcmfarms.com</h5>
                                </a>

                            </div>
                        </div>
                        <div class="header-flag">
                            <ul class="flag-wrap">
                                <li class="flag-item-top">
                                    <a href="#" class="flag-bar d-flex align-items-center">
                                        <img src="{{ asset('assets/images/flag.png') }}" alt="Image">
                                        <span>Eng <i class="far fa-angle-down"></i></span>
                                    </a>
                                    <ul class="flag-item-bottom">
                                        <li class="flag-item">
                                            <a href="#" class="flag-link">
                                                <img src="{{ asset('assets/images/flag-1.png') }}" alt="Image">
                                                United Kingdom
                                            </a>
                                        </li>
                                        <li class="flag-item">
                                            <a href="#" class="flag-link">
                                                <img src="{{ asset('assets/images/flag-2.png') }}" alt="Image">
                                                Germany
                                            </a>
                                        </li>
                                        <li class="flag-item">
                                            <a href="#" class="flag-link">
                                                <img src="{{ asset('assets/images/flag-3.png') }}" alt="Image">
                                                Argentina
                                            </a>
                                        </li>
                                        <li class="flag-item">
                                            <a href="#" class="flag-link">
                                                <img src="{{ asset('assets/images/flag-4.png') }}" alt="Image">
                                                Australia
                                            </a>
                                        </li>
                                        <li class="flag-item">
                                            <a href="#" class="flag-link">
                                                <img src="{{ url('assets/images/flag-5.png') }}" alt="Image">
                                                Canada
                                            </a>
                                        </li>
                                        <li class="flag-item">
                                            <a href="#" class="flag-link">
                                                <img src="{{ asset('assets/images/flag-6.png') }}" alt="Image">
                                                New Zealand
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigation ">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarFive" aria-controls="navbarFive" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button> <!-- navbar toggler -->
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarFive">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('about') }}">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('gallery') }}">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="{{ url('contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!--====== HEADER PART ENDS ======-->

@yield('content')

<!--====== FOOTER PART START ======-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-top align-items-center">
                    <div class="footer-logo">
                        <a href="#"><img src="{{ asset('kcm_farms_logo.png') }}" width="200" alt="KCM Farms"></a>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About Us</a></li>
                            <li><a href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="footer-content">
                    <h4 class="title">About Company</h4>
                    <p>But I must explain to you how all this mistaken idea denoun pleasure and praising pain was born and will give you a complete account of the system, and expound teachings</p>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="footer-info mt-30">
                    <h3 class="title">Feel Free Don’t Hesitate To Contact With Us Or Call Us</h3>
                    <ul>
                        <li><a href="tel:+1(682) 214-3361"><i class="fal fa-mobile"></i> +1(682) 214-3361</a></li>
                        <li><a href="mailto:info@kcmfarms.com"><i class="fal fa-envelope-open-text"></i> info@kcmfarms.com</a></li>
                        <li><a href="#"><i class="far fa-map-marker-alt"></i> Zurich, Switzerland</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright-content d-md-flex d-block align-items-center">
                        <p>Copyright © <span>Ketti M. Campbell Farms.</span> All Rights Reserved</p>
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TOP ======-->
<div class="back-to-top">
    <a href="#">
        <i class="fal fa-angle-double-up"></i>
    </a>
</div>
<!--====== BACK TO TOP ======-->


<!--====== jquery js ======-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<!--====== Bootstrap js ======-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<!--====== Slick js ======-->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<!--====== Isotope js ======-->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

<!--====== Images Loaded js ======-->
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>

<!--====== counterup js ======-->
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>

<!--====== waypoints js ======-->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{ asset('assets/js/ajax-contact.html') }}"></script>

<!--====== Main js ======-->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/60c87e7d7f4b000ac037af9c/1f87is7ap';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
