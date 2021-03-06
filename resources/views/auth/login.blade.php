@extends('layouts.main')

@section('title')
    Login
@endsection

@section('contents')
    <div class="banner-area" id="banner-area" style="background-image:url({{ asset('header.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="banner-heading">
                        <h2 class="banner-title">Login</h2>
                        <ol class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>Login</li>
                        </ol>
                    </div>
                </div>
                <!-- Col end-->
            </div>
            <!-- Row end-->
        </div>
        <!-- Container end-->
    </div>

    <div class="container" style="margin-bottom: 120px;">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="form-container">
                <div>
                    <!-- Section Title Starts -->
                    <div class="row text-center">
                        <h2 class="title-head hidden-xs">Member <span>login</span></h2>
                    </div>
                    <!-- Section Title Ends -->

                    <!-- Form Starts -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                                   value="{{ old('email') }}" placeholder="Email Address *" required>
                            @error('email')
                            <span class="invalid-feedback text-warning" role="alert">
                                <strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <!-- Input Field Ends -->

                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control @error('password') is-invalid @enderror"
                                   type="password" name="password"
                                   placeholder="password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <!-- Input Field Ends -->

                        <div class="form-group">
                            <div style="display: block;">
                                <label>Remember me</label>
                                <input style="display: inline; width: 50px;" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                            </div>
                        </div><!-- /.form-grp -->

                        <!-- Submit Form Button Starts -->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">login</button>
                            <p class="text-center">
                                don't have an account ? <a href="{{ route('register') }}">register now</a></p>
                        </div>
                        <!-- Submit Form Button Ends -->
                    </form>
                    <!-- Form Ends -->

                </div>
            </div>
        </div>
    </div>

@endsection
