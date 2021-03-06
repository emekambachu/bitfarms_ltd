@extends('layouts.main')

@section('title')
    About
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h1 class="banner-title">About Us</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>About Us</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <div class="about-pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 about-desc">
                    <h2 class="column-title title-small"><span>Company Introduction</span>
                        <span style="color: #0E608C; font-weight: bold;">Bitfarms Limited</span></h2>
                    <p>After gaining knowledge and experience for years our mission was apparent, we needed to clear a path for small to mid-sized investors to smarter innovative trading and increased profits. Cryptocurrency market is developing in a rapid pace and is one of promising options of economy.<br><br>
                        To that end we provide support to our investors with a stable and easy-to-use technology built to manage their investment , from trading to making profits. Margin traders are not left behind in this sitename provide trading technologies for transactions on world crypto assets trading platforms for small and large trades.<br><br>
                        We are a lifetime partner committed to helping our investors enhance the market exchange and increase the value of their capital. A wellspring of trustworthy information, our breadth of experience has fueled our reputation as a financial trading firm.</p>
                    <div class="gap-15"></div>
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
                                                As your Financial Professionals, we will do everything in our power to keep you focused on where you want to go, advise you on how to get there, and continually remind you of the importance of maintaining a disciplined approach to realizing your dreams.</p>
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
                                            <p>Our company is based on the principle that education and understanding of your current financial situation is vital to successfully make prudent decisions concerning your future financial condition.<br><br> If you have any questions about your current financial situation or wish to schedule an appointment, please contact us.</p>
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

    <section class="ts-services" id="ts-services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="section-title"><span>Our Features</span>
                        <strong style="color: #0E608C;">What We Offer</strong></h2>
                </div>
            </div>
            <!-- Title row end-->
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/crypto.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-pie-chart2"></i>
                        </span>
                            <h3 class="service-title">Instant Connect</h3>
                            <p>The mining starts immediately after confirmed payment. First payouts within 24 hours.</p>
                        </div>
                    </div>
                    <!-- Service1 end-->
                </div>

                <!-- Col 1 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/serv1.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-tax"></i>
                        </span>
                            <h3 class="service-title">Instant Withdrawal</h3>
                            <p>Choose the amount to withdraw and receive it instantly</p>
                        </div>
                    </div>
                    <!-- Service2 end-->
                </div>
                <!-- Col 2 end-->

                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/options_trading.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-savings"></i>
                        </span>
                            <h3 class="service-title">Detailed Statistics</h3>
                            <p>View all mining related information in real-time, at any point from any location.</p>
                        </div>
                    </div>
                    <!-- Service3 end-->
                </div>
                <!-- Col 3 end-->
            </div>

            <!-- Content 1 row end-->
            <div class="gap-60"></div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/asset_management.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-mutual-fund"></i>
                        </span>
                            <h3 class="service-title">Secure Investments</h3>
                            <p>We were able to balance risks and profit levels using advances and highly qualified employees of the company.</p>
                        </div>
                    </div>
                    <!-- Service4 end-->
                </div>
                <!-- Col 4 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/commodities.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-loan"></i>
                        </span>
                            <h3 class="service-title">Fixed Fees</h3>
                            <p>No hidden fees or comissions. Every single transaction is visible to you.</p>
                        </div>
                    </div>
                    <!-- Service5 end-->
                </div>

                <!-- Col 5 end-->
                <div class="col-lg-4 col-md-12">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img class="img-fluid" src="{{ asset('main/services/funds_management.jpg') }}" alt="">
                        </div>
                        <div class="ts-service-content">
                        <span class="ts-service-icon">
                           <i class="icon icon-consult"></i>
                        </span>
                            <h3 class="service-title">24 Hours Live Support</h3>
                            <p>our support is working 7/24 hours online and our online chat support is working about 24 hours daily .</p>
                        </div>
                    </div>
                    <!-- Service6 end-->
                </div>
                <!-- Col 6 end-->
            </div>
            <!-- Content Row 2 end-->
        </div>
        <!-- Container end-->
    </section>
@endsection
