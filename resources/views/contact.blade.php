@extends('layouts.main')

@section('title')
    Contact us
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h2 class="banner-title">Contact us</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Contact us</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <section class="main-container" id="main-container" style="margin-bottom: 200px;">
        <!-- container end-->
        <div class="gap-60"></div>
        <div class="ts-form" id="ts-form">
            <div class="container">

                @include('includes.alerts')

                <h2 class="column-title title-small"><span>Send a</span>
                    <span style="color: #0f3e68; font-weight: bold;">Message</span></h2>

                <div class="row">
                    <div class="col-lg-6">

                        <form class="contact-form" action="{{ url('contact/send') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control form-name" id="name" name="name"
                                               placeholder="Full Name" type="text" required="">
                                    </div>
                                </div>
                                <!-- Col end-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control form-email" id="email" name="email"
                                               placeholder="Email" type="email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control form-message required-field" name="email_message"
                                                  id="message" placeholder="Message" rows="8" required></textarea>
                                    </div>
                                </div>
                                <!-- Col 12 end-->
                            </div>
                            <!-- Form row end-->
                            <div class="text-right">
                                <button class="btn btn-primary tw-mt-30" type="submit">Send</button>
                            </div>
                        </form>
                        <!-- Form end-->
                    </div>
                    <div class="col-lg-6">
                        <div class="map" id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
