<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ config('app.name', 'ImpactVibes') }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href=" {{ asset('assets/images/favicon.png') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!--====== Animate css ======-->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!--====== Magnific Popup css ======-->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }} ">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.css') }} ">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }} ">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }} ">
    <!--====== Custom css ======-->
    @yield('style')

</head>

<body style="color:black;">

    <!--====== PRELOADER PART START ======-->

    {{-- <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>

    </div> --}}

    <!--====== PRELOADER PART START ======-->

    <!--====== HEADER PART START ======-->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{ asset('assets/images/logo6.png') }} " alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a  href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a  href="/market">Market</a>
                                </li>

                                <li class="nav-item">
                                    <a  href="/mentorsConnect">Mentors</a>
                                </li>

                                <li class="nav-item">
                                    <a  href="/venturesdeal">Ventures Deal</a>
                                </li>




                                <li class="nav-item">
                                    <a  href="/opportunity">Opportunities</a>
                                </li>

                                <li class="nav-item">
                                    <a  href="/blogs">Blog</a>
                                </li>

                                <li class="nav-item">
                                    <a  href="/ourimpactstories">Impacts</a>
                                </li>
                                @guest
                                <li class="nav-item">
                                    <a  href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a  href="{{ route('register') }}">Register</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item">
                                    <a  href="/dashboard">Dashboard</a>
                                </li>
                                <li class="nav-item">
											 <a href="{{ route('logout') }}" style="color:red"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
									</li>
                                @endguest
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>

    <!--====== HEADER PART ENDS ======-->

        @yield('content')

    <!--====== FOOTER PART START ======-->

    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-75 pb-120">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="footer-logo mt-40">
                            <a href="#">
                                <img src="{{ asset('assets/images/logo6.png') }}" alt="Logo">
                            </a>
                            <ul class="footer-social mt-25">
                                <li><a href="https://web.facebook.com/thaimpactvibes"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="https://twitter.com/thaimpactvibes"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="https://www.instagram.com/thaimpactvibes/?hl=en"><i class="lni-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/impact-vibes-a89156204/"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer logo -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">More</h5>
                            <ul>
                                <li><a href="/ourimpactstories">Meet the Team</a></li>
                                <li><a href="#">Work with us</a></li>
                                <li><a href="#">Subscribe</a></li>

                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Help</h5>
                            <ul>
                                <li><a href="/help">Help Center</a></li>
                                <li><a href="/contact">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="footer-info mt-50">
                            <h5 class="f-title">Contact Info</h5>
                            <ul>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Phone :</span>
                                        <div class="footer-info-content">
                                            <p>+234 806 8807060</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Email :</span>
                                        <div class="footer-info-content">
                                            <p>contact@impactvibes.com</p>
                                            <p>support@impactvibes.com</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                                <li>
                                    <div class="single-footer-info mt-20">
                                        <span>Address :</span>
                                        <div class="footer-info-content">
                                            <p>Owerri Tech Hub, Opp. City School Wetheral.</p>
                                        </div>
                                    </div> <!-- single footer info -->
                                </li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright pt-15 pb-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                           An Impact Circle Enterprise Initiative <p>Powered by <a href="https://amadiaustin.me" rel="nofollow">Rex-Tech-Group</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!--  footer copyright -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TO TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TO TOP PART ENDS ======-->










    <!--====== jquery js ======-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }} "></script>
    <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }} "></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


    <!--====== Slick js ======-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>


    <!--====== nav js ======-->
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>

    <!--====== Nice Number js ======-->
    <script src="{{ asset('assets/js/jquery.nice-number.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
