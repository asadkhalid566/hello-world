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
                                <li class="nav-item"> <a href="" data-toggle="modal" data-target="#registerModal"
                                        class="nav-link">
                                        Register
                                    </a></li>
                                <li class="nav-item"> <a href="" data-toggle="modal" data-target="#loginModal"
                                        class="nav-link">
                                        Login
                                    </a></li>


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




<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="main">
                    <link rel="stylesheet" href="css/register.css">
                    <section class="signup">
                        <!-- <img src="images/signup-bg.jpg" alt=""> -->
                        <div class="containers">
                            <div class="signup-content">
                                <!-- <form method="post" action="{{route('register')}}" id="signup-form" class="signup-form"> -->
                                <form id="signup-form" class="signup-form">
                                    @csrf
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h2 class="form-title">Create account</h2>
                                    <div class="form-group">
                                        <input type="text" class="form-input" name="name" id="name"
                                            placeholder="Your Name" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-input" name="email" id="email"
                                            placeholder="Your Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-input" name="password" id="password"
                                            placeholder="Password" />
                                        <span toggle="#password"
                                            class="zmdi zmdi-eye field-icon toggle-password"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-input" name="passconf" id="re_password"
                                            placeholder="Repeat your password" />
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-input" name="mobile" id="mobile"
                                            placeholder=" Mobile" />
                                    </div>

                                    <div class="form-group">
                                        <input type="textarea" class="form-input" name="address" id="mobile"
                                            placeholder=" Address" />
                                    </div>

                                    <div class="form-radio">
                                        <input type="radio" name="role" value="student" id="student"
                                            checked="checked" />
                                        <label for="newbie">student</label>
                                        <input type="radio" name="role" value="teacher" id="teacher" />
                                        <label for="master">Teacher</label>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <input type="submit" name="submit" id="submit" class="form-submit"
                                            value="Sign up" />
                                    </div>


                                </form>

                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

    $('#signup-form').on('submit', function(e) {

        e.preventDefault();


        $.ajax({
            type: 'POST',
            url: '/registerform',
            data: $('#signup-form').serialize(),
            success: function(data) {
                console.log(data)
                $("#registerModal").modal('hide')
                alert("data saved");
            }
        });
    });
});
</script>






<!--   LOGIN Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="main">
                    <link rel="stylesheet" href="css/register.css">
                    <section class="signup">
                        <!-- <img src="images/signup-bg.jpg" alt=""> -->
                        <div class="containers">
                            <div class="signup-content">
                                <!-- <form method="post" action="{{route('register')}}" id="signup-form" class="signup-form"> -->
                                <form id="login-form" class="login-form">
                                    @csrf
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h2 class="form-title">Login account</h2>

                                    <div class="form-group">
                                        <input type="email" class="form-input" name="email" id="email"
                                            placeholder="Your Email" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-input" name="password" id="re_password"
                                            placeholder="your password" />
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <input type="submit" name="submit" id="submit" class="form-submit"
                                            value="Sign up" />
                                    </div>


                                </form>

                            </div>
                        </div>
                    </section>

                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {

    $('#login-form').on('submit', function(e) {

        e.preventDefault();


        $.ajax({
            type: 'POST',
            url: '/loginform',
            data: $('#login-form').serialize(),
            success: function(data) {
                console.log(data)
                if(data==1){
                  $("#loginModal").modal('hide')
                alert("data saved");
                }
               
            }
        });
    });
});
</script>