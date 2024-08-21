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

    li.dropdown {
        display: inline-block;
    }

    .dropdown-content {
        background-color: #333;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgb(42, 109, 61);
        z-index: 1;
        position: relative;
        top: 100%;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 14px;
        text-decoration: none;
        text-align: left;
    }

    .dropdown-content a:hover {
        background-color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>
<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-success bg-success">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">Menu</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ url('/citizen-services') }}" id="citizenServicesDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery Photos</a>
                <div class="dropdown-menu" aria-labelledby="Gallery Photos">
                    <a class="dropdown-item" href="{{ url('/citizen-services/service1') }}">Upload</a>
                    <a class="dropdown-item" href="{{ url('/citizen-services/service2') }}">Update</a>
                    <a class="dropdown-item" href="{{ url('/citizen-services/service3') }}">Delete</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ url('/service-requests') }}" id="serviceRequestsDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Order's</a>
                <div class="dropdown-menu" aria-labelledby="serviceRequestsDropdown">
                    <a class="dropdown-item" href="{{ url('/service-requests/request1') }}">Upload</a>
                    <a class="dropdown-item" href="{{ url('/service-requests/request2') }}">Update</a>
                    <a class="dropdown-item" href="{{ url('/service-requests/request3') }}">Delete</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/admin/images-paths.index') }}">Photo Gallery</a>
            </li>
         
            <li class="nav-item"><a class="nav-link" href="{{ url('/admin/orders') }}">Orders</a></li>
            <li class="nav-item"><a class="nav-link" href="{{  route('rtimannuals.index') }}">RTI Mannuals</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/admin/MurqeeNotification') }}">MurqeeNotification</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/admin/Officers') }}">Officers</a></li>
            <li class="nav-item">
                <a class="nav-link" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
            </li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">Log Out</button>
        </form>
    </div>
</nav>

