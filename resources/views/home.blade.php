@extends('layouts.app')

@section('content')
    @include('partials.murquee', ['murcynotifications' => $murcynotifications])
    <div class="home-content">
        @include('carousel.slider')
        <div class="container-fluid mt-1">
            <div class="row">
                <!-- Sidebar with Links -->
                <div class="col-md-3 mb-3">
                    <div class="card-body">
                        <button class="button-56">
                            <a style="color: #000000;"
                                href="https://mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zpt_qpay_new?sap-client=300&sap-language=EN#"
                                target="_blank">{{__('messages.property_tax_payment')}}</a>
                        </button>
                        <button class="button-56">
                            <a style="color: #000000;"
                                href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_wd_billpay_new#"
                                target="_blank">{{__('messages.water_tax_payment')}}</a>
                        </button>
                        <button class="button-56">
                            <a style="color: #000000;" href="http://164.100.196.30/Content/html/abpas6.4.2/Homepage.html#"
                                target="_blank">{{__('messages.building_permission')}}</a>
                        </button>
                        <button class="button-56">
                            <a style="color: #000000;"
                                href="https://mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zfirenoc_links#"
                                target="_blank">{{__('messages.fire_noc')}}</a>
                        </button>
                        <button class="button-56">
                            <a style="color: #000000;" href="https://crsorgi.gov.in/web/index.php/auth/login"
                                target="_blank">{{__('messages.birth_registration')}}</a>
                        </button>
                        <button class="button-56">
                            <a style="color: #000000;" href="https://crsorgi.gov.in/web/index.php/auth/login"
                                target="_blank">{{__('messages.death_registration')}}</a>
                        </button>
                        <button class="button-56">
                            <a style="color: #000000;"
                                href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/ztrade_lic_online#"
                                target="_blank">{{__('messages.trade_license')}}</a>
                        </button>
                        <button class="button-56">
                            <a style="color: #000000;"
                                href="https://www.mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zhoard_qpay#"
                                target="_blank">{{__('messages.hoarding_license')}}</a>
                        </button>
                    </div>

                    <!-- City Information Card -->

                    <div class="card-body mt-1">
                        @include('partials.showcityinformation', ['cityInformation' => $cityInformation])
                    </div>
                    <div class="card-body mt-1">
                          <div class="panel panel-success" style="background:transparent;">
                <div style="margin-left:0px ">
                    <a class="weatherwidget-io" href="https://forecast7.com/en/25d0780d20/chandla/" data-label_1="--KHARGAPUR--" data-label_2="WEATHER" data-font="Roboto" data-icons="Climacons Animated" data-mode="Current" data-theme="ruby" data-basecolor="rgba(0, 83, 46, 0.7)">Wheather</a>
                </div>

            </div>
                    </div>

                </div>
                <!-- Main Content -->
                <div class="col-md-6 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Welcome</h5>
                        <p class="card-text">Content for Column 2 goes here.</p>
                    </div>

                </div>
                <!-- Sidebar with Images -->
                <div class="col-md-3 mb-3">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                @include('partials.top_notifications', [
                                    'notifications' => $topNotifications,
                                ])
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <a href="https://www.gad.mp.gov.in/" target="blank">
                                    <img alt="" src="/images/UserUploads/gad1.jpg" class="img-fluid mb-2 border border-success rounded p-1">
                                </a>
                                <a href="https://www.mpenagarpalika.gov.in/" target="blank">
                                    <img alt="" src="/images/UserUploads/enagar3.jpg" class="img-fluid mb-2 border border-success rounded p-1">
                                </a>
                                <a href="https://mptenders.gov.in/nicgep/app" target="blank">
                                    <img alt="" src="/images/UserUploads/etender4.jpg" class="img-fluid mb-2 border border-success rounded p-1">
                                </a>
                                <a href="http://mpedistrict.gov.in/MPL/Home.aspx" target="blank">
                                    <img alt="" src="/images/UserUploads/lokseva5.jpg" class="img-fluid mb-2 border border-success rounded p-1">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Card -->

                    <div class="card-body">
                        @include('partials.slider', ['activeOfficers' => $activeOfficers])
                    </div>
                </div>
            </div>
            <!-- Important Links -->
            <div class="row">
                <h4 class="text-center text-white bg-dark p-2">{{__('messages.important_links')}}</h4>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <marquee behavior="scroll" direction="left" onmouseout="this.start();" onmouseover="this.stop();">
                        <p>
                            <img align="center" alt="" border="0" height="130" src="/images/implink/imp2.png"
                                width="280"> &nbsp;
                            <a href="http://www.samagra.gov.in">
                                <img align="center" alt="" border="0" height="130"
                                    src="/images/implink/imp18.png" width="280"> &nbsp;
                            </a>
                            <a href="http://shramsewa.mp.gov.in/hi-in/">
                                <img align="center" alt="" border="0" height="130"
                                    src="/images/implink/imp5.png" width="280"> &nbsp;
                            </a>
                            <a href="http://www.cmhelpline.mp.gov.in">
                                <img align="center" alt="" border="0" height="130"
                                    src="/images/implink/imp8.png" width="280"> &nbsp;
                            </a>
                            <a href="http://www.mponline.gov.in/Portal/Services/CMRF/index.html">
                                <img align="center" alt="" border="0" height="130"
                                    src="/images/implink/imp9.png" width="280"> &nbsp;
                            </a>
                            <a href="https://www.mpinfo.org/">
                                <img align="center" alt="" border="0" height="130"
                                    src="/images/implink/imp11.png" width="280"> &nbsp;
                            </a>
                            <a href="https://www.mphc.gov.in/">
                                <img align="center" alt="" border="0" height="130"
                                    src="/images/implink/imp19.png" width="280"> &nbsp;
                            </a>
                            <a href="http://www.svdhyajnmp.org/">
                                <img align="center" alt="" border="0" height="130"
                                    src="/images/implink/imp14.png" width="280"> &nbsp;
                            </a>
                        </p>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
    <script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
    }

    function showPosition(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;

        // Update the content of the label with the location information
        document.getElementById("locationLabel").innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;
    }

    function showError(error) {
        switch (error.code) {
            case error.PERMISSION_DENIED:
                alert("User denied the request for Geolocation.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Location information is unavailable.");
                break;
            case error.TIMEOUT:
                alert("The request to get user location timed out.");
                break;
            case error.UNKNOWN_ERROR:
                alert("An unknown error occurred.");
                break;
        }
    }
</script>
<script>
    ! function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://weatherwidget.io/js/widget.min.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'weatherwidget-io-js');
</script>
@endsection
