<!DOCTYPE html>
<html lang="en">

<head>
    <!--
     Basic Page Needs
     ==================================================
     -->
    <meta charset="utf-8">
    <title>@yield('title') - Bitfarms Limited</title>
    <!--
     Mobile Specific Metas
     ==================================================
     -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('bitfarms_logo.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('bitfarms_logo.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('bitfarms_logo.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('bitfarms_logo.png') }}">

    <!-- CSS ================================================== -->
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css') }}">
    <!-- Animation-->
    <link rel="stylesheet" href="{{ asset('main/css/animate.css') }}">
    <!-- Morris CSS -->
    <link rel="stylesheet" href="{{ asset('main/css/morris.css') }}">
    <!-- FontAwesome-->
    <link rel="stylesheet" href="{{ asset('main/css/font-awesome.min.css') }}">
    <!-- Icon font-->
    <link rel="stylesheet" href="{{ asset('main/css/icon-font.css') }}">
    <!-- Owl Carousel-->
    <link rel="stylesheet" href="{{ asset('main/css/owl.carousel.min.css') }}">
    <!-- Owl Theme -->
    <link rel="stylesheet" href="{{ asset('main/css/owl.theme.default.min.css') }}">
    <!-- Colorbox-->
    <link rel="stylesheet" href="{{ asset('main/css/colorbox.css') }}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{ asset('main/css/responsive.css') }}">

    @yield('top-assets')
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file.-->
    <!--if lt IE 9
     script(src='js/html5shiv.js')
     script(src='js/respond.min.js')
     -->
</head>

<body>

<div class="body-inner">

    <div class="site-top-2">
        <div class="top-bar highlight" id="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-9 col-sm-12">
                        <ul class="top-info">
                            <li><span class="info-icon">
                                    <i class="icon icon-phone3"></i></span>
                                <div class="info-wrapper">
                                    <p class="info-title">+1 (323) 641-5051</p>
                                </div>
                            </li>
                            <li><span class="info-icon">
                                    <i class="icon icon-envelope"></i></span>
                                <div class="info-wrapper">
                                    <p class="info-title">info@bit-farms.ltd</p>
                                </div>
                            </li>
                            <li class="last" id="google_translate_element"></li>
                        </ul>
                        <!-- Ul end-->
                    </div>
                    <!-- Top info end-->
                    <div class="col-lg-3 col-md-3 col-sm-12 text-lg-right text-md-center">
                        <ul class="top-social">
                            <li>
                                <a title="Facebook" href="#">
                                    <span class="social-icon"><i class="fa fa-facebook"></i></span>
                                </a>
                                <a title="Twitter" href="#">
                                    <span class="social-icon"><i class="fa fa-twitter"></i></span>
                                </a>
                                <a title="Skype" href="#">
                                    <span class="social-icon"><i class="fa fa-instagram"></i></span>
                                </a>
                            </li>
                            <!-- List End -->
                        </ul>
                        <!-- Top Social End -->
                    </div>
                    <!--Col end-->
                </div>
                <!-- Content row end-->
            </div>
            <!-- Container end-->
        </div>
        <!-- Top bar end-->

        <header class="header-standard header-light" id="header">
            <div class="container">
                <div class="site-nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-brand navbar-header">
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('bitfarms_logo.png') }}" width="100" alt="">
                                </a>
                            </div>
                            <!-- logo end-->
                        </div>
                        <!-- Navbar brand end-->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span></button>
                        <!-- End of Navbar toggler-->
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/') }}">Home</a></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="" data-toggle="dropdown">
                                        Company<i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('about') }}">About us</a></li>
                                        <li><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                                        <li><a href="{{ url('legal') }}">Legal</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('investments') }}">Investment plans</a></li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('services') }}">Services</a></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('contact') }}">Contact us</a></li>

                                <li class="nav-item" style="color: #0f3e68; font-weight: bold;">
                                    <a class="nav-link" href="{{ route('register') }}">Sign up</a></li>

                                <li class="nav-item" style="color: #0f3e68; font-weight: bold;">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a></li>

                            </ul>
                            <!--Nav ul end-->
                        </div>
                    </nav>
                </div>
                <!-- Site nav inner end-->
            </div>
            <!-- Container end-->
        </header>
        <!-- Header end-->
    </div>

    @yield('contents')

    <!-- Footer start-->
    <footer class="footer" id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-top-bg row">
                    <div class="col-lg-4 footer-box"><i class="icon icon-map-marker2"></i>
                        <div class="footer-box-content">
                            <h3>Head Office</h3>
                            <p>555 West 5th street, 35th Floor,
                                Los Angeles, California</p>
                        </div>
                    </div>
                    <!-- Box 1 end-->
                    <div class="col-lg-4 footer-box"><i class="icon icon-phone3"></i>
                        <div class="footer-box-content">
                            <h3>Call Us</h3>
                            <p>+1 (323) 641-5051</p>
                        </div>
                    </div>
                    <!-- Box 2 end-->
                    <div class="col-lg-4 footer-box"><i class="icon icon-envelope"></i>
                        <div class="footer-box-content">
                            <h3>Mail Us</h3>
                            <p>info@bit-farms.ltd</p>
                        </div>
                    </div>
                    <!-- Box 3 end-->
                </div>
                <!-- Content row end-->
            </div>
            <!-- Container end-->
        </div>
        <!-- Footer top end-->
        <div class="footer-main bg-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 footer-widget footer-about">
                        <div class="footer-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('digital_trading_options_logo.png') }}" width="100" alt="">
                            </a>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <!-- Footer social end-->
                    </div>
                    <!-- About us end-->
                    <div class="col-lg-4 col-md-12 footer-widget">
                        <h3 class="widget-title">Useful Links</h3>
                        <ul class="list-dash">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('investments') }}">Packages</a></li>
                            <li><a href="{{ url('about') }}">About us</a></li>
                            <li><a href="{{ url('services') }}">Services</a></li>
                            <li><a href="{{ url('contact') }}">Contact us</a></li>
                            <li><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                            <li><a href="{{ url('legal') }}">Legal</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-12W footer-widget">
                        <h3 class="widget-title">Improve your Trading Strategy</h3>
                        <ul class="list-dash">
                            <li><a href="https://www.youtube.com/watch?v=zSzOFG356c0">
                                    Is Cryptocurrency really a good investment? (Video)</a></li>
                            <li><a href="https://www.youtube.com/watch?v=mxlqVFhgv3k">
                                    $20,000 a week with cryptocurrency (Video)</a></li>
                            <li><a href="https://www.youtube.com/watch?v=u-vrdPtZVXc">
                                    The revolution of cryptocurrency (Video)</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Content row end-->
            </div>
            <!-- Container end-->
        </div>
        <!-- Footer Main-->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="copyright-info"><span>
                                Copyright © {{ date('Y') }} Bitfarms Limited. All Rights Reserved.</span></div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="footer-menu">
                            <ul class="nav unstyled">
                                <li><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                                <li><a href="{{ url('legal') }}">Legal</a></li>
                                <li><a href="{{ url('faq') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Row end-->
            </div>
            <!-- Container end-->
        </div>
        <!-- Copyright end-->
    </footer>
    <!-- Footer end-->

    <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
        <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
            <!-- icon end-->
        </button>
        <!-- button end-->
    </div>
    <!-- End Back to Top-->

    <!--
    Javascript Files
    ==================================================
    -->
    <!-- initialize jQuery Library-->
    <script type="text/javascript" src="{{ asset('main/js/jquery.js') }}"></script>
    <!-- Popper-->
    <script type="text/javascript" src="{{ asset('main/js/popper.min.js') }}"></script>
    <!-- Bootstrap jQuery-->
    <script type="text/javascript" src="{{ asset('main/js/bootstrap.min.js') }}"></script>
    <!-- Owl Carousel-->
    <script type="text/javascript" src="{{ asset('main/js/owl.carousel.min.js') }}"></script>
    <!-- Counter-->
    <script type="text/javascript" src="{{ asset('main/js/jquery.counterup.min.js') }}"></script>
    <!-- Waypoints-->
    <script type="text/javascript" src="{{ asset('main/js/waypoints.min.js') }}"></script>
    <!-- Color box-->
    <script type="text/javascript" src="{{ asset('main/js/jquery.colorbox.js') }}"></script>
    <!-- Smoothscroll-->
    <script type="text/javascript" src="{{ asset('main/js/smoothscroll.js') }}"></script>
    <!-- Google Map API Key-->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
    <!-- Google Map Plugin-->
    <script type="text/javascript" src="{{ asset('main/js/gmap3.js') }}"></script>
    <!-- Template custom-->
    <script type="text/javascript" src="{{ asset('main/js/custom.js') }}"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
<!--Body Inner end-->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6047247d385de407571e0c1e/1f0aud3v9';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</body>

</html>
