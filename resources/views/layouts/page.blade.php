<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<header>

    <header>

        <body>
            <div>
                <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                    <div class="container">
                        <a class="navbar-brand" href="{{url('/')}}"><span>Diary</span>Automation</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="oi oi-menu"></span> Menu
                        </button>

                        <div class="collapse navbar-collapse" id="ftco-nav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                                <li class="nav-item"><a href="{{url('/about')}}" class="nav-link">About</a></li>

                                @if (Route::has('login'))

                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                                    @else
                                    <li class="nav-item"><a href="{{url('/login')}}" class="nav-link">Login</a></li>

                                        @if (Route::has('register'))
                                        <li class="nav-item"><a href="{{url('/register')}}" class="nav-link">Register</a></li>
                                        @endif
                                    @endauth

                            @endif


                                <li class="nav-item"><a href="{{url('/instructor')}}" class="nav-link">Instructor</a>
                                </li>

                                <li class="nav-item"><a href="{{url('/contact')}}" class="nav-link">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>


                @yield('content')

                <footer class="ftco-footer ftco-no-pt">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col-md pt-5">
                                <div class="ftco-footer-widget pt-md-5 mb-4">
                                    <h2 class="ftco-heading-2">About</h2>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts.</p>
                                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md pt-5">
                                <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
                                    <h2 class="ftco-heading-2">USEFUL LINKS</h2>
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="py-2 d-block">Students Portal</a></li>
                                        <li><a href="#" class="py-2 d-block">Teachers Portal</a></li>
                                        <li><a href="#" class="py-2 d-block">Diary Automation</a></li>
                                        <li><a href="#" class="py-2 d-block">OFFICE</a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="col-md pt-5">
                                <div class="ftco-footer-widget pt-md-5 mb-4">
                                    <h2 class="ftco-heading-2">CONTACT US</h2>
                                    <div class="block-23 mb-3">
                                        <ul>
                                            <li><span class="icon fa fa-map-marker"></span><span class="text">Feroze pur
                                                    road 17 km, Lahore, Pakistan, Aisa</span></li>
                                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+92
                                                        3000853017</span></a></li>
                                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                                        class="text">info@diaryautomation.com</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">

                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                    </script> All rights reserved | Diary Automation System
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>



                <!-- loader -->
                <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                            stroke="#F96D00" />
                    </svg></div>


                <script src="/js/jquery.min.js"></script>
                <script src="/js/jquery-migrate-3.0.1.min.js"></script>
                <script src="/js/popper.min.js"></script>
                <script src="/js/bootstrap.min.js"></script>
                <script src="/js/jquery.easing.1.3.js"></script>
                <script src="/js/jquery.waypoints.min.js"></script>
                <script src="/js/jquery.stellar.min.js"></script>
                <script src="/js/owl.carousel.min.js"></script>
                <script src="/js/jquery.magnific-popup.min.js"></script>
                <script src="/js/jquery.animateNumber.min.js"></script>
                <script src="/js/bootstrap-datepicker.js"></script>
                <script src="/js/scrollax.min.js"></script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
                </script>
                <script src="/js/google-map.js"></script>
                <script src="/js/main.js"></script>


        </body>

</html>

