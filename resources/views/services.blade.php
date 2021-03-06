@extends('layouts.main')

@section('title')
    Services
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h1 class="banner-title">Services</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Services</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <section class="ts-services" id="ts-services" style="margin-bottom: 200px;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="section-title"><span>Our Services</span>
                        <strong style="color: #0E608C;">What We Do</strong></h2>
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
                            <h3 class="service-title">Cryptocurrencies</h3>
                            <p>Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>
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
                            <h3 class="service-title">Forex</h3>
                            <p>Options for investing cash including certificates of deposit and the money market funds. With CDs. </p>
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
                            <h3 class="service-title">Option Trading</h3>
                            <p>We offer the best Forex and Options trading services operating closely with an expert team.</p>
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
                            <h3 class="service-title">Asset Management</h3>
                            <p>With the best team of Financial and asset managers, you are assured on important projects, construction, contracts, and other assets. We invests pooled funds from clients, putting the capital to work through different investments including stocks, bonds, real estate, master limited partnerships, and more.</p>
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
                            <h3 class="service-title">Commodities</h3>
                            <p>A commodity is a basic of good used in commerce that is interchangeable with other commodities or known currencies. We offer the best the market has to offer and always put our customers first in all decisions.</p>
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
                            <h3 class="service-title">Funds Management</h3>
                            <p>Our team can be found working in fund management with mutual funds, pension funds, trust funds, and hedge funds. Our managers generally oversee mutual funds or pensions and manage their direction. study trends in the market, analyze economic data, and stay current on company news.</p>
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
