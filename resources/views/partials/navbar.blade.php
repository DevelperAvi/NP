<style>
    li a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-family: Arial, sans-serif;
    }

    li a:hover,
    .dropdown:hover .dropbtn {
        background-color: yellow;
    }
    }

   
</style>
<!-- resources/views/layouts/app.blade.php or wherever your navigation is -->
<nav class="navbar navbar-expand-lg  p-1" style="background-color:#343a40">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @guest
                <li class="nav-item"><a  href="{{ route('home') }}">{{ __('messages.home') }}</a></li>
                
                 <!-- Citizen Services Dropdown -->
<li class="nav-item dropdown">
    <a class="  dropdown-toggle" href="#" id="citizenServicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ __('messages.citizen_services') }}
    </a>
    <div class="dropdown-menu" aria-labelledby="citizenServicesDropdown">
        <a class="dropdown-item" href="https://crsorgi.gov.in/web/index.php/auth/login">{{ __('messages.birth_registration') }}</a>
        <a class="dropdown-item" href="https://crsorgi.gov.in/web/index.php/auth/login">{{ __('messages.death_registration') }}</a>
        <a class="dropdown-item" href="https://www.mpenagarpalika.gov.in/irj/portal/anonymous?NavigationTarget=navurl://78f852682ffd97574b5d8887c04b3ad9">
             {{ __('messages.marriage_certificate') }}</a>
        <a class="dropdown-item" href="http://164.100.196.30/Content/html/abpas6.4.2/Homepage.html#/">{{ __('messages.building_permission') }} </a>
        <a class="dropdown-item" href="https://mpenagarpalika.gov.in:8000/sap/bc/webdynpro/sap/zfirenoc_links#">{{ __('messages.fire_noc') }}</a>
        <a class="dropdown-item" href="https://www.mpenagarpalika.gov.in:8001/sap/bc/webdynpro/sap/zwt_new_connection#">{{ __('messages.water_connection') }} </a>
        <a class="dropdown-item" href="https://mpenagarpalika.gov.in:8005/sap/bc/webdynpro/sap/zpt_qpay_new?sap-client=500&amp;sap-language=EN#">  {{ __('messages.new_property_application') }}</a>
    </div>
</li>

<!-- Online Payments Dropdown -->
<li class="nav-item dropdown">
    <a class=" dropdown-toggle" href="#" id="onlinePaymentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ __('messages.online_payments') }}
    </a>
    <div class="dropdown-menu" aria-labelledby="onlinePaymentsDropdown">
        <a class="dropdown-item" href="#a1">{{ __('messages.property_tax_payment') }}</a>
        <a class="dropdown-item" href="#a2">{{ __('messages.water_tax_payment') }} </a>
        <a class="dropdown-item" href="#a3">{{ __('messages.trade_license') }} </a>
        <a class="dropdown-item" href="#a4">{{ __('messages.rental_payments') }}</a>
    </div>
</li>

<!-- Service Request Dropdown -->
<li class="nav-item dropdown">
    <a class="  dropdown-toggle" href="#" id="serviceRequestDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ __('messages.service_request') }}
    </a>
    <div class="dropdown-menu" aria-labelledby="serviceRequestDropdown">
        <a class="dropdown-item" href="#1">{{ __('messages.service_request') }} </a>
        <a class="dropdown-item" href="#2">{{ __('messages.request_water_tank') }}</a>
        <a class="dropdown-item" href="#3">{{ __('messages.request_septic_tank') }}</a>
        <a class="dropdown-item" href="#4">{{ __('messages.request_litter_collection') }}</a>
        <a class="dropdown-item" href="#5">{{ __('messages.request_debris_collection') }}</a>
        <a class="dropdown-item" href="#6">{{ __('messages.request_ambulance') }}</a>
        <a class="dropdown-item" href="#7">{{ __('messages.request_mobile_toilet') }}</a>
    </div>
</li>

                <li class="nav-item"><a   href="{{ route('rtimannuals.view') }}">{{ __('messages.rti_mannuals') }}</a></li>
                <li class="nav-item"><a   href="{{ route('gallery.view') }}">{{ __('messages.gallery') }}</a></li>
                <li class="nav-item"><a   href="{{ route('orders.view') }}">{{ __('messages.downloads') }}</a></li>
                <li class="nav-item"><a   href="{{ route('aboutUs') }}">{{ __('messages.about_us') }}</a></li>
                <li class="nav-item"><a  href="{{ route('login') }}">{{ __('messages.login') }}</a></li>
                
            @else
                <li class="nav-item"><a   href="{{ route('dashboard') }}">{{ __('messages.home') }}</a></li>
                <li class="nav-item"><a   href="{{ route('rtimannuals.index') }}">{{ __('messages.rti_mannuals') }}</a></li>
                <li class="nav-item"><a   href="{{ route('gallery.index') }}">{{ __('messages.gallery') }} </a></li>
                <li class="nav-item"><a   href="{{ route('orders.index') }}">{{ __('messages.downloads') }} </a></li>
                <li class="nav-item"><a   href="{{ route('murcy.index') }}">{{ __('messages.murcy_notification') }}</a></li>
                <li class="nav-item"><a   href="{{ route('officers.index') }}">{{ __('messages.officers') }}</a></li>
                <li class="nav-item"><a   href="{{ route('cityinformation.index') }}">{{ __('messages.city_information') }}</a></li>
                <li class="nav-item"><a   href="{{ route('notifications.index') }}">{{ __('messages.notifications') }}</a></li>
                
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link text-light">{{ __('messages.logout') }}</button>
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>

