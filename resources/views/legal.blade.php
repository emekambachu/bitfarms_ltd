@extends('layouts.main')

@section('title')
    Legal
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h1 class="banner-title">Legal</h1>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Legal</li>
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

                <div class="col-lg-12 col-12 about-desc">
                    <p>The content provided on this website is for informational purposes only.<br>

                        Bitfarms Limited is not responsible for, and explicitly disclaims, all liability for damages of any kind arising out of the use, reference to or reliance on any information contained within the website.<br>

                        Although the Bitfarms Limited website may include links with direct access to other internet resources / websites, it is not responsible for the accuracy or content of the information listed on these sites.<br>

                        Links from the Bitfarms Limited website to third party websites do not constitute an endorsement by Bitfarms Limited of those parties or their products and services.</p>
                    <div class="gap-15"></div>
                </div>

            </div>
            <!-- Main row end-->
        </div>
        <!-- Container 1 end-->
    </div>
    <!-- About pattern End-->
@endsection
