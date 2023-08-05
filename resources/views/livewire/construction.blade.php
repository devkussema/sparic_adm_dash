@extends('layouts.custom-app')

@section('styles')

@endsection

@section('content')

                <div class="page-content">
                    <div class="container text-center text-dark">
                        <div class="construction ">
                            <div class="text-dark">
                                <div class="card-body ">
                                    <h2 class="font mb-4">Coming Soon</h2>
                                    <h4 class="mt-5 text-dark">Our Website is under construction, follows us for more updates !
                                    </h4>
                                    <br>
                                    <div id="count-down" class="center-block text-white mt-3">
                                        <div class="clock-presenter days_dash">
                                            <div class="digit"></div>
                                            <div class="digit"></div>
                                            <p class="mt-2 text-dark">Days</p>
                                        </div>
                                        <div class="clock-presenter hours_dash">
                                            <div class="digit"></div>
                                            <div class="digit"></div>
                                            <p class="mt-2 text-dark">Hours</p>
                                        </div>
                                        <div class="clock-presenter minutes_dash">
                                            <div class="digit"></div>
                                            <div class="digit"></div>
                                            <p class="mt-2 text-dark">Minutes</p>
                                        </div>
                                        <div class="clock-presenter seconds_dash">
                                            <div class="digit"></div>
                                            <div class="digit"></div>
                                            <p class="mt-2 text-dark">Seconds</p>
                                        </div>
                                    </div>
                                    <div class="input-group ms-auto me-auto mt-6 construction-btn">
                                        <input type="text" class="form-control " placeholder=" Email-id">
                                        <button type="button" class="btn btn-primary">
                                            Subscribe
                                        </button>
                                    </div>
                                    <div class="mt-6 btn-list">
                                        <button type="button" class="btn btn-icon btn-facebook"><i
                                                class="fa fa-facebook"></i></button>
                                        <button type="button" class="btn btn-icon btn-google"><i
                                                class="fa fa-google"></i></button>
                                        <button type="button" class="btn btn-icon btn-twitter"><i
                                                class="fa fa-twitter"></i></button>
                                        <button type="button" class="btn btn-icon btn-dribbble"><i
                                                class="fa fa-dribbble"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

@section('scripts')

        <!-- COUNT DOWN -->
        <script src="{{asset('build/assets/plugins/count-down/jquery.lwtCountdown-1.0.js')}}"></script>
        <script src="{{asset('build/assets/plugins/count-down/count-down.js')}}"></script>

@endsection