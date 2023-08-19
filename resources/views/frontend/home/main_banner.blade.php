<!-- ***** Main Banner Area Start ***** -->
<style>
    .img-banner {
        min-width: 100%;
        min-height: 100vh;
        max-width: 100%;
        max-height: 100vh;
        object-fit: cover;
        z-index: -1;

        padding-bottom: 10px;

    }

    .slideshow-container {
        position: relative;
        max-width: 100%;
        overflow: hidden;
    }

    .slide {
        display: none;
    }

    .slide.active {
        display: block;
    }
</style>

<!-- Slideshow Container -->
<div class="main-banner slideshow-container" id="top">
    <!-- Slide 1 -->
    <div class="slide active">
        <img class="img-banner" src="{{ asset('frontend/assets/images/Crossfire-RM-250.jpg') }}" alt="">
    </div>
    <!-- Slide 2 (Add more slides as needed) -->
    <div class="slide">
        <img class="img-banner" src="{{ asset('frontend/assets/images/royalenfield.jpg') }}" alt="">
    </div>
    <div class="slide">
        <img class="img-banner" src="{{ asset('frontend/assets/images/bg.avif') }}" alt="">
    </div>
    <!-- Add more slides as needed -->
</div>

<div class="main">
    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Explore Our Ranges Of Bikes & Scooters</h6>
            <h2>Best <em>Brand New & Used Bikes Dealer</em> in town!</h2>
            <div class="main-button">
                <a href="{{ route('contact.admin') }}">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for the Slideshow -->
<script>
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function showSlide(n) {
        slides[currentSlide].classList.remove('active');
        currentSlide = (n + slides.length) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function handleHover() {
        nextSlide();
    }

    setInterval(nextSlide, 5000); // Change slide every 5 seconds (adjust as needed)

    // Add hover event listener
    const imgBanners = document.querySelectorAll('.img-banner');
    imgBanners.forEach(imgBanner => {
        imgBanner.addEventListener('mouseenter', handleHover);
    });
</script>
