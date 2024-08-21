@include('partials.preheader')
<style>
        .header h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #2c3e50; /* Customize as needed */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .header p {
            font-size: 1.25rem;
            font-weight: bold;
            color: #34495e; /* Customize as needed */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
 
    </style>
<header id="header" class="header d-flex align-items-center">
        <div class="container-fluid p-0">
            <div class="row bg-light align-items-center">
                <div class="col-md-2 col-sm-4 col-xs-12 text-center">
                    <a href="#" class="logo d-flex align-items-center">
                        <img src="{{ asset('images/MPLogo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 d-flex flex-column align-items-center justify-content-center text-center p-2">
                    <h1 class="display-4">{{ config('constant.NAGAR_PARISHAD_SUB_HI') }}</h1>
                    <p class="lead">{{ config('constant.NAGAR_PARISHAD_SUB') }}</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-12 text-center">
                    <a href="#" class="logo d-flex align-items-center mt-3">
                        <img src="{{ asset('images/emblem.svg') }}" alt="Logo">
                    </a>
                </div>
            </div>
        </div>
    </header>
