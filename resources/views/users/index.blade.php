@extends('layouts.users')

@section('title')
    Dashboard
    @endsection

@section('top-assets')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,900,700italic,700,600italic,600,400italic);

        #timer {
            margin: 20px 10px 10px 30%;
            background-color: #f0efef;
            border-radius: 15px;
            display: inline-block;
            line-height: 1;
            padding: 20px;
            font-size: 40px;
        }

        span {
            display: block;
            font-size: 20px;
            color: black;
        }

        #days {
            display: inline-block;
            font-size: 100px;
            color: #db4844;
        }
        #hours {
            display: inline-block;
            font-size: 100px;
            color: #f07c22;
        }
        #minutes {
            display: inline-block;
            font-size: 100px;
            color: #f6da74;
        }
        #seconds {
            display: inline-block;
            font-size: 50px;
            color: #abcd58;
        }
    </style>
@endsection

@section('contents')
    <div class="layout-px-spacing">
        <div class="page-header">
            <div class="page-title">
                <h3 class="text-dark">Dashboard</h3>
            </div>
        </div>

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div style="height:400px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;">
                    <div style="height:400px; padding:0px; margin:0px; width: 100%;">
                        <iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=10&pref_coin_id=1505&graph=yes" width="100%" height="400px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;">
                        </iframe>
                    </div>
                    <div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px"></a>
                    </div>
                </div>

                <div class="center" id="timer">
                    <span>Countdown to Mining Completion</span>
                    <div id="days"></div>
                    <div id="hours"></div>
                    <div id="minutes"></div>
                    <div id="seconds"></div>
                </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/pie_chart.png') }}"/>
                                </div>
                            </div>

                            <div class="w-info">
                                <h6 class="value">
                                @if($recentInvestment)
                                {{ $recentInvestment->investmentPackage->name ?? Null }}
                                @else
                                No Current Mining Package<br>
                                <a href="{{ route('investments.create') }}">
                                    <button class="btn btn-success btn-sm" style="float: left;">Add New</button>
                                </a>
                                @endif
                                </h6>
                                <p class="">Mining Package</p>
                            </div>
                        </div>
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/rising_dollar.png') }}"/>
                                </div>
                            </div>
                            <div class="w-info">
                                <h6 class="value">$ {{ number_format($user->wallet->amount) }}</h6>
                                <p class="">Balance</p>
                            </div>
                        </div>
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/bar_chart.png') }}"/>
                                </div>
                            </div>
                            <div class="w-info">
                                <h6 class="value">$ {{ number_format($user->wallet->profit) }}</h6>
                                <p class="">Profit</p>
                            </div>
                        </div>
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/line_chart.png') }}"/>
                                </div>
                            </div>
                            <div class="w-info">
                                <h6 class="value">$ {{ number_format($user->wallet->commission) }}</h6>
                                <p class="">Commission</p>
                            </div>
                        </div>
{{--                        <div class="progress">--}}
{{--                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="">
                                <div class="w-icon">
                                    <img width="100" src="{{ asset('users/icons/line_chart.png') }}"/>
                                </div>
                            </div>
                            <div class="w-info">
                                <h6 class="value">$ {{ number_format($user->wallet->bonus) }}</h6>
                                <p class="">Bonus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="widget widget-table-one">
                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                    </div>

                    <div class="widget-content">

                        @foreach($transactions as $trans)
                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>{{ $trans->description }}</h4>
                                        <p class="meta-date">{{ \Carbon\Carbon::parse($trans->created_at)->format('j F, Y') }}</p>
                                    </div>

                                </div>
                                @if(!empty($trans->debit))
                                <div class="t-rate rate-dec">
                                    <p><span>${{ number_format($trans->debit) }}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-arrow-down">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline></svg></p></div>
                                @else
                                <div class="t-rate rate-inc">
                                    <p><span>${{ number_format($trans->credit) }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-arrow-up">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <polyline points="19 12 12 19 5 12"></polyline></svg></p></div>
                                @endif
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <div id="tableDropdown" class="col-lg-6 col-md-6 col-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Your Investments</h4>
                                <a href="{{ route('investments.create') }}">
                                    <button class="btn btn-success btn-sm" style="float: left;">Add New</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4">
                                <thead>
                                <tr>
                                    <th scope="col">Investment ID</th>
                                    <th scope="col">Package</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Cryptocurrency</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($investments as $invest)
                                    <tr>
                                        <td>{{ $invest->invest_id }}</td>
                                        <td>
                                            {{ $invest->investmentPackage->name ?? '' }}<br>
                                            {{ $invest->investmentPackage->roi ?? '' }}
                                        </td>
                                        <td>${{ number_format($invest->amount) }}</td>
                                        <td>{{ $invest->cryptocurrency }}</td>
                                        <td>{{ $invest->created_at->format('d M Y') }}</td>
                                        <td>
                                            @if($invest->is_approved)
                                                <span class="badge badge-success">Approved</span>
                                            @else
                                                <span class="badge badge-danger">Un-Approved</span>
                                            @endif
                                            </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © {{ date('Y') }}
                    <a target="_blank" href="{{ url('/') }}">Bitfarms Limited</a>, All rights reserved.</p>
            </div>
        </div>

    </div>
    @endsection

@section('bottom-assets')
    <script>
        function makeTimer() {

            //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");
            var endTime = new Date("{{ $stop_date }} GMT+01:00");
            endTime = (Date.parse(endTime) / 1000);

            var now = new Date();
            now = (Date.parse(now) / 1000);

            var timeLeft = endTime - now;

            var days = Math.floor(timeLeft / 86400);
            var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
            var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
            var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

            if (hours < "10") { hours = "0" + hours; }
            if (minutes < "10") { minutes = "0" + minutes; }
            if (seconds < "10") { seconds = "0" + seconds; }

            $("#days").html(days + "<span>Days</span>");
            $("#hours").html(hours + "<span>Hours</span>");
            $("#minutes").html(minutes + "<span>Minutes</span>");
            $("#seconds").html(seconds + "<span>Seconds</span>");

        }

        setInterval(function() { makeTimer(); }, 1000);
    </script>
@endsection
