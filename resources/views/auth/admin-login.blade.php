@extends('layouts.main')

@section('title')
    Admin Login
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h2 class="banner-title">Admin Login</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Admin Login</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <section class="main-container" id="main-container" style="background-color: #fffefe; margin-bottom: 100px;">
        <!-- container end-->
        <div class="gap-60"></div>
        <div class="ts-form" id="ts-form">
            <div class="container">

                @include('includes.alerts')

                <div class="row">
                    <div class="col-lg-7 col-12">

                        <form class="contact-form" method="POST" action="{{ route('admin-login') }}">
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username"
                                               value="{{ old('username') }}" placeholder="Username *" required>
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password"
                                               placeholder="password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div><!-- /.form-grp -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12" style="margin-top: 6px;">
                                    <button class="btn btn-primary tw-mt-30" type="submit">Login</button>
                                </div><!-- /.col-md-6 -->

                            </div><!-- /.row -->
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
