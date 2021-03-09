@extends('layouts.main')

@section('title')
Home
@endsection

@section('contents')
    <div id="box-slide" class="owl-carousel owl-theme page-slider mrt-140">
        <div class="item" style="background-image:url({{ asset('main/slider/slide1.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h4 class="box-slide-title">WELCOME TO</h4>
                        <h5 class="box-slide-sub-title">Bitfarms Limited</h5>
                        <p class="box-slide-description">One of the most powerful bitcoin mining platforms available on the market today.</p>
                        <p>
                            <a href="{{ route('register') }}" class="slider btn btn-primary">Sign up</a>
                            <a href="{{ route('login') }}" class="slider btn btn-border">Login</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Item 1 end -->

        <div class="item" style="background-image:url({{ asset('main/slider/slide2.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h4 class="box-slide-title">We are the Leaders</h4>
                        <h5 class="box-slide-sub-title">of the cryptocurrency mining Industry</h5>
                        <p class="box-slide-description">Our efficient bitcoin mining server designed for small, medium and enterprise-grade investors.
                        </p>
                        <p>
                            <a href="{{ url('about') }}" class="slider btn btn-primary">About us</a>
                            <a href="{{ url('services') }}" class="slider btn btn-border">Services</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item 2 end -->

        <div class="item" style="background-image:url({{ asset('main/slider/slide3.jpg') }})">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text animated">
                        <h4 class="box-slide-title">Our Data-centers</h4>
                        <h5 class="box-slide-sub-title">We Care our Customers</h5>
                        <p class="box-slide-description">We are committed to ensuring security and stability on the bitcoin blockchain through our state-of-the-art data centers.</p>
                        <p>
                            <a href="{{ url('contact') }}" class="slider btn btn-primary">Contact us</a>
{{--                            <a href="#" class="slider btn btn-border">Contact Us</a>--}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item 3 end -->
    </div>
    <!-- Box owl carousel end-->

    <div class="about-pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-desc">
                    <h2 class="column-title title-small"><span>About us</span>
                        <span style="color: #0E608C; font-weight: bold;">Bitfarms Limited</span></h2>
                    <p>After gaining knowledge and experience for years our mission was apparent, we needed to clear a path for small to mid-sized investors to smarter innovative trading and increased profits. Cryptocurrency market is developing in a rapid pace and is one of promising options of economy.<br>
                        To that end we provide support to our investors with a stable and easy-to-use technology built to manage their investment , from trading to making profits. Margin traders are not left behind in this.</p>
                    <div class="gap-15"></div>
                    <div class="text-center"><a class="btn btn-primary" href="{{ url('about') }}"> About us</a></div>
                </div>

                <!-- Col end-->
                <div class="col-lg-6 text-md-center mrt-40">
                    <img class="img-fluid" src="{{ asset('main/home/h1.jpg') }}" alt="">
                </div>
                <!-- Col end-->

            </div>
            <!-- Main row end-->
        </div>
        <!-- Container 1 end-->
    </div>
    <!-- About pattern End-->

    <section class="ts-services solid-bg" id="ts-services">
        <div class="container">
            <div class="row text-left">
                <div class="col-lg-12">
                    <h2 class="section-title border-title-left">Our Company</h2>
                </div>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="featured-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_one" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-pie-chart2"></i></span><span class="tab-text-title">Mission Statement</span></span></a></li>
                            <!-- list 1 end-->
                            <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_two" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-loan"></i></span><span class="tab-text-title">Our Values</span></span></a></li>
                            <!-- list 2 end-->
                            <li class="nav-item"><a class="nav-link animated fadeIn active show" href="#tab_three" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-savings"></i></span><span class="tab-text-title">
                                            Our Commitment</span></span></a></li>
                            <!-- list 3 end-->
                            <li class="nav-item"><a class="nav-link animated fadeIn" href="#tab_four" data-toggle="tab"><span class="tab-head"><span><i class="icon icon-consult"></i></span><span class="tab-text-title">Our Principle</span></span></a></li>
                            <!-- list 4 end-->
                        </ul>
                        <!-- Nav-tabs end-->
                        <div class="tab-content">
                            <div class="tab-pane animated fadeInRight" id="tab_one">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle"
                                             style="background-image:url({{ asset('main/images/tabs/tab-shape.png') }});">
                                            <img class="img-center img-fluid" src="{{ asset('main/images/tabs/img1.png') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">Mission Statement</h3>
                                            <p>Bitfarm Investments, Inc. specializes in providing private, corporate, and institutional clients with personalized wealth management and trading strategies by combining “Global Focus, Local Reach” with institutional capabilities. Our clients benefit from our competitive pricing, execution and customized financial services.<br><br>

                                                Our driving force is our commitment to providing our clients with the highest level of quality advice by adhering to our core values of Trust, Integrity and Excellence.</p>
                                            <a class="btn-light" href="{{ url('about') }}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>
                            <!-- Tab pane 1 end-->
                            <div class="tab-pane animated fadeInRight" id="tab_two">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">Our Values</h3>
                                            <p>Trust, Integrity and Excellence are the pillars on which ARCA is built. Those qualities are embodied by our financial professionals, who have extensive training and industry experience.</p>
                                            <a class="btn-light" href="{{ url('about') }}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle align-self-center"
                                             style="background-image:url({{ asset('main/images/tabs/tab-shape.png') }});">
                                            <img class="img-center img-fluid" src="{{ asset('main/images/tabs/img2.png') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>

                            <!-- Tab pane 2 end-->
                            <div class="tab-pane animated fadeInRight active show" id="tab_three">
                                <div class="row">
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle"
                                             style="background-image:url({{ asset('main/images/tabs/tab-shape.png') }});">
                                            <img class="img-center img-fluid" src="{{ asset('main/images/tabs/img3.png') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">Our Commitment</h3>
                                            <p>Our staff consists of experienced professionals with a "hands on" approach to financial guidance. Not only will you find our team members knowledgeable, but you will also discover that our staff truly cares about making your dreams a reality.<br>
                                                As your Financial Professionals, we will do everything in our power to keep you focused on where you want to go, advise you on how to get there, and continually remind you of the importance of maintaining a disciplined approach to realizing your dreams.</p><a class="btn-light" href="{{ url('about') }}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>
                            <!-- Tab pane 3 end-->
                            <div class="tab-pane animated fadeInRight" id="tab_four">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="tab-content-info">
                                            <h3 class="tab-content-title">Our Principle</h3>
                                            <p>Our company is based on the principle that education and understanding of your current financial situation is vital to successfully make prudent decisions concerning your future financial condition.<br><br> If you have any questions about your current financial situation or wish to schedule an appointment, please contact us.</p><a class="btn-light" href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                        <!-- Tab content info end-->
                                    </div>
                                    <!-- Col end-->
                                    <div class="col-lg-4 align-self-center">
                                        <div class="bg-contain-verticle"
                                             style="background-image:url({{ asset('main/images/tabs/tab-shape.png') }});">
                                            <img class="img-center img-fluid" src="{{ asset('main/images/tabs/img4.png') }}" alt="">
                                        </div>
                                    </div>
                                    <!-- Col end-->
                                </div>
                                <!-- Row end-->
                            </div>
                            <!-- Tab pane 3 end-->
                        </div>
                        <!-- tab content-->
                        <div class="gap-60"></div>
                    </div>
                    <!-- Schedule tab end-->
                </div>
                <!-- Col end-->
            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>

{{--    <section class="ts-services" id="ts-services">--}}
{{--        <div class="container">--}}
{{--            <div class="row text-center">--}}
{{--                <div class="col-md-12">--}}
{{--                    <h2 class="section-title"><span>Our Features</span>--}}
{{--                        <strong style="color: #0E608C;">What We Offer</strong></h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Title row end-->--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="ts-service-box">--}}
{{--                        <div class="ts-service-image-wrapper">--}}
{{--                            <img class="img-fluid" src="{{ asset('main/services/crypto.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ts-service-content">--}}
{{--                        <span class="ts-service-icon">--}}
{{--                           <i class="icon icon-pie-chart2"></i>--}}
{{--                        </span>--}}
{{--                            <h3 class="service-title">Instant Connect</h3>--}}
{{--                            <p>The mining starts immediately after confirmed payment. First payouts within 24 hours.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Service1 end-->--}}
{{--                </div>--}}

{{--                <!-- Col 1 end-->--}}
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="ts-service-box">--}}
{{--                        <div class="ts-service-image-wrapper">--}}
{{--                            <img class="img-fluid" src="{{ asset('main/services/serv1.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ts-service-content">--}}
{{--                        <span class="ts-service-icon">--}}
{{--                           <i class="icon icon-tax"></i>--}}
{{--                        </span>--}}
{{--                            <h3 class="service-title">Instant Withdrawal</h3>--}}
{{--                            <p>Choose the amount to withdraw and receive it instantly</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Service2 end-->--}}
{{--                </div>--}}
{{--                <!-- Col 2 end-->--}}

{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="ts-service-box">--}}
{{--                        <div class="ts-service-image-wrapper">--}}
{{--                            <img class="img-fluid" src="{{ asset('main/services/options_trading.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ts-service-content">--}}
{{--                        <span class="ts-service-icon">--}}
{{--                           <i class="icon icon-savings"></i>--}}
{{--                        </span>--}}
{{--                            <h3 class="service-title">Detailed Statistics</h3>--}}
{{--                            <p>View all mining related information in real-time, at any point from any location.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Service3 end-->--}}
{{--                </div>--}}
{{--                <!-- Col 3 end-->--}}
{{--            </div>--}}

{{--            <!-- Content 1 row end-->--}}
{{--            <div class="gap-60"></div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="ts-service-box">--}}
{{--                        <div class="ts-service-image-wrapper">--}}
{{--                            <img class="img-fluid" src="{{ asset('main/services/asset_management.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ts-service-content">--}}
{{--                        <span class="ts-service-icon">--}}
{{--                           <i class="icon icon-mutual-fund"></i>--}}
{{--                        </span>--}}
{{--                            <h3 class="service-title">Secure Investments</h3>--}}
{{--                            <p>We were able to balance risks and profit levels using advances and highly qualified employees of the company.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Service4 end-->--}}
{{--                </div>--}}
{{--                <!-- Col 4 end-->--}}
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="ts-service-box">--}}
{{--                        <div class="ts-service-image-wrapper">--}}
{{--                            <img class="img-fluid" src="{{ asset('main/services/commodities.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ts-service-content">--}}
{{--                        <span class="ts-service-icon">--}}
{{--                           <i class="icon icon-loan"></i>--}}
{{--                        </span>--}}
{{--                            <h3 class="service-title">Fixed Fees</h3>--}}
{{--                            <p>No hidden fees or comissions. Every single transaction is visible to you.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Service5 end-->--}}
{{--                </div>--}}

{{--                <!-- Col 5 end-->--}}
{{--                <div class="col-lg-4 col-md-12">--}}
{{--                    <div class="ts-service-box">--}}
{{--                        <div class="ts-service-image-wrapper">--}}
{{--                            <img class="img-fluid" src="{{ asset('main/services/funds_management.jpg') }}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="ts-service-content">--}}
{{--                        <span class="ts-service-icon">--}}
{{--                           <i class="icon icon-consult"></i>--}}
{{--                        </span>--}}
{{--                            <h3 class="service-title">24 Hours Live Support</h3>--}}
{{--                            <p>our support is working 7/24 hours online and our online chat support is working about 24 hours daily .</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- Service6 end-->--}}
{{--                </div>--}}
{{--                <!-- Col 6 end-->--}}
{{--            </div>--}}
{{--            <!-- Content Row 2 end-->--}}
{{--        </div>--}}
{{--        <!-- Container end-->--}}
{{--    </section>--}}

    <section id="call-to-action" class="call-to-action-bg bg-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 align-self-center">
                    <h3 class="call-to-action-title">Cryptocurrencies Trading Forex</h3>

                    <div style="height:669px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:649px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="645px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>

                </div>
            </div>
        </div>
    </section>

    <section class="ts-features no-padding" style="margin-top: 20px;">
        <div class="container-fluid">

                <h2 class="section-title">3 Easy Steps to Start Mining</h2>

            <div class="row">
                <div class="col-lg-4 feature-box1" style="background-image: url({{ asset('main/images/features/feature1.jpg') }});">
                    <div class="ts-feature text-center">
                        <div class="ts-feature-info">
                            <h3 class="ts-feature-title">Sign Up</h3>
                            <p>Fill in the form and get ready to start mining in less than 5 minutes</p>
                        </div>
                    </div>
                    <!-- feature 1 end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-4 feature-box2" style="background-image: url({{ asset('main/images/features/feature2.jpg') }});">
                    <div class="ts-feature text-center">
                        <div class="ts-feature-info">
                            <h3 class="ts-feature-title">Purchase a package</h3>
                            <p> Choose one of the most profitable contracts and start cloud mining</p>
                        </div>
                    </div>
                    <!-- feature 2 end-->
                </div>
                <!-- Col end-->
                <div class="col-lg-4 feature-box3" style="background-image: url({{ asset('main/images/features/feature3.jpg') }});">
                    <div class="ts-feature text-center">
                        <div class="ts-feature-info">
                            <h3 class="ts-feature-title">Get Paid</h3>
                            <p>Withdraw your mining income on a daily basis to your crypto wallet</p>
                        </div>
                    </div>
                    <!-- feature 3 end-->
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </section>

    <section class="main-container" id="main-container" style="padding-top: 5px;">
        <div class="ts-price-box">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2 class="section-title"><span>Our</span>Investment Plans</h2>
                    </div>
                    <!-- Col End -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pricing-boxed">

                            @foreach($packages as $package)
                            <div class="single-price-box">
                                <div class="pricing-plan" style="background-color: #ebf1ff; margin-bottom: 5px;">
                                    <div class="pricing-header border-left" style="background-color: #2154CF;">
                                        <h2 class="plan-name">{{ $package->name }}</h2>
                                        <h3 class="plan-price">
                                            @if(!empty($package->min))
                                                <p style="font-size: 18px;">Minimum: {{ '$'.number_format($package->min) }}</p>
                                            @endif

                                            @if(!empty($package->max))
                                            <p style="font-size: 18px;">Maximum: {{ '$'.number_format($package->max) }}</p>
                                            @else
                                            <p style="font-size: 18px;">and above</p>
                                            @endif
                                        </h3>
                                    </div>
                                    <ul class="list-unstyled">

                                        @if(!empty($package->roi))
                                            <li style="font-size: 18px;">{{ $package->roi }}
                                                <i class="fa fa-check"></i></li>
                                        @endif

                                        @if(!empty($package->option1))
                                        <li style="font-size: 18px;">{{ $package->option1 }}
                                            <i class="fa fa-check"></i></li>
                                        @endif

                                        @if(!empty($package->option2))
                                            <li style="font-size: 18px;">{{ $package->option2 }}
                                                <i class="fa fa-check"></i></li>
                                        @endif

                                        @if(!empty($package->option3))
                                            <li style="font-size: 18px;">{{ $package->option3 }}
                                                <i class="fa fa-check"></i></li>
                                        @endif

                                        @if(!empty($package->referral_bonus))
                                        <li style="font-size: 18px;">{{ $package->referral_bonus }}% Referral Bonus</li>
                                        @endif

                                        @if(!empty($package->expert_advice))
                                            <li style="font-size: 18px;">{{ $package->expert_advice }}</li>
                                        @endif
                                    </ul>
                                    <div>
                                        <a target="_self" href="{{ route('register') }}" class="btn btn-primary">Sign up</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ts-testimonial-slide" class="ts-testimonial-slide solid-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial-slide owl-carousel owl-theme">
                        <div class="row quote-item-area">
                            <div class="col-md-5">
                                <div class="quote-thumb">
                                    <img class="quote-thumb-img" src="{{ asset('main/testimonial/aljazeera.png') }}">

                                </div>
                                <!-- Quote thumb end -->
                            </div>
                            <!-- Col end -->

                            <div class="col-md-7">
                                <div class="quote-item-content">
                                    <h3 class="quote-name">Aljazeera Finance, 2019 </h3>
                                    <p class="quote-message">
                                        Bitfarms Limited' Financial performance continues to rise against the market's down trend. They have proven to have a solid plan for investors.</p>
                                </div>
                                <!-- Quote content end -->
                            </div>
                            <!-- Col end -->
                        </div>

                        <div class="row quote-item-area">
                            <div class="col-md-5">
                                <div class="quote-thumb">
                                    <img class="quote-thumb-img" src="{{ asset('main/testimonial/bbcuk.png') }}">

                                </div>
                                <!-- Quote thumb end -->
                            </div>
                            <!-- Col end -->

                            <div class="col-md-7">
                                <div class="quote-item-content">
                                    <h3 class="quote-name">BBC News, UK.</h3>
                                    <p class="quote-message">
                                        Bitfarms Limited has been the most attractive cryptocurrency and investment platform on the Forex market as at 2017. </p>
                                </div>
                                <!-- Quote content end -->
                            </div>
                            <!-- Col end -->
                        </div>

                        <div class="row quote-item-area">
                            <div class="col-md-5">
                                <div class="quote-thumb">
                                    <img class="quote-thumb-img" src="{{ asset('main/testimonial/cnbc.png') }}">

                                </div>
                                <!-- Quote thumb end -->
                            </div>
                            <!-- Col end -->

                            <div class="col-md-7">
                                <div class="quote-item-content">
                                    <h3 class="quote-name">CNBC International</h3>
                                    <p class="quote-message">Bitfarms Limited achieve 43% returns in revenue from Stocks, Cryptocurrencies and Forex Trading.</p>
                                </div>
                                <!-- Quote content end -->
                            </div>
                            <!-- Col end -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="quote-area bg-overlay overlay-color" id="quote-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 qutoe-form-inner-left">
                    <div class="quote_form">
                        <h2 class="column-title title-white"><span>We are always ready</span> Request Consultation</h2>
                        <form method="post" action="{{ url('contact/send') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email Address" required="">
                                    </div>
                                </div>
                            </div>

                        <!-- Row 1 end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" id="subject" name="subject" type="text" placeholder="Subject" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Row end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message" rows="6" name="email_message" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Row end-->
                        <div class="form-group text-right mb-0">
                            <input class="button btn btn-primary" type="submit" value="Send Message">
                        </div>
                        </form>
                    </div>
                    <!-- Quote form end-->
                </div>

            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Quote area end-->

    <section class="main-container">
        <div class="container">
            <div class="col-md-12">
                <h2 class="section-title">News and Updates</h2>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="col-md-12">
                    <div class="feedgrabbr_widget" id="fgid_71e82e89566823ac785c365ed"></div>
                    <script>if (typeof (fg_widgets) === "undefined") fg_widgets = new Array(); fg_widgets.push("fgid_71e82e89566823ac785c365ed");</script>
                    <script async src="https://www.feedgrabbr.com/widget/fgwidget.js"></script>
                </div>

            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Featured projects end-->

    <section class="clients-area" id="clients-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 owl-carousel owl-theme text-center partners" id="partners-carousel">
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client1.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client2.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client3.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client4.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client5.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo last">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client6.png') }}" alt="">
                        </a>
                    </figure>
                    <figure class="item partner-logo last">
                        <a href="#">
                            <img class="img-fluid" src="{{ asset('main/images/clients/client7.png') }}" alt="">
                        </a>
                    </figure>
                </div>
                <!-- Owl carousel end-->
            </div>
            <!-- Content row end-->
        </div>
        <!-- Container end-->
    </section>
    <!-- Partners end-->
@endsection
