 
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
            
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/banner1.jpg') }}" alt="banner1" class="d-block" style="height:340px; width:100%;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner12.jpg') }}" alt="Chicago" class="d-block" style="height:340px; width:100%;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner3.jpg') }}" alt="New York" class="d-block" style="height:340px; width:100%;">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner4.jpg') }}" alt="New York" class="d-block" style="height:340px; width:100%;">
            </div>
            
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
 
