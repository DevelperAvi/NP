<!-- resources/views/partials/slider.blade.php -->

<style>
    #slider-container {
        width: 300px; 
        overflow: hidden; 
        border-radius: 10px;
        
    }

    #slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    .slide1 {
        min-width: 300px;
        box-sizing: border-box;
        position: relative;
    }

    .slide1 img {
        width: 300px;
        height: 310px;
        border-radius: 50% 50% 50% 50%;
    }

    .caption {
        
        bottom: 0;
        left: 0;
        right: 0;
        height: 43px;
        background: rgb(12, 105, 54);
        color: #fff;
        padding-top: 10px;
        border-radius: 20px 20px 0 0;
        text-align: center;
        font-size: 16px;
    }

    .caption1 {
        
        bottom: 0;
        left: 0;
        right: 0;
        height: 35px;
        background: rgb(0, 28, 43);
        color: #fff;
        padding-top: 6px;
        border-radius: 0 0 20px 20px;
        text-align: center;
        font-size: 14px;
    }
</style>

<div id="slider-container">
    <div id="slider">
        @foreach($activeOfficers as $officer)
            <div class="slide1">
                <img src="{{ asset('storage/' . $officer->image_path) }}" alt="Image of {{ $officer->name }}" class="img-fluid" />
                <div class="caption">{{ $officer->name }}</div>
                <div class="caption1">{{ $officer->designation }}</div>
            </div>
        @endforeach
    </div>
</div>

<script>
    const slider = document.getElementById('slider');
    let currentIndex = 0;

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slider.children.length;
        updateSlider();
    }

    function updateSlider() {
        const translateValue = -currentIndex * 300 + 'px';
        slider.style.transform = 'translateX(' + translateValue + ')';
    }

    setInterval(nextSlide, 3000); // Change slide every 3 seconds
</script>
