@extends('layouts.app')

@section('content')

    <div class="homeSlideshow">
        <div class="SSlides fade">
            <img src="{{ URL::asset('/images/red.jpg') }}" style="width:100%">
            <div class="text"> Button for Slideshow</div>
        </div>

        <div class="SSlides fade">
            <img src="{{ URL::asset('/images/blue.jpg') }}" style="width:100%">
            <div class="text"> Button for Slideshow</div>
        </div>

        <div class="SSlides fade">
            <img src="{{ URL::asset('/images/green.jpg') }}" style="width:100%">
            <div class="text"> Button for Slideshow</div>
        </div>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>


    <!--JavaScript for the slideShow-->
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("SSlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
    <br>
    <br>


    <div class="abouth5">
        <p>a little about us</p>
    </div>
    <div class="box">
        <div class="card">
            <h5>About Us</h5>
            <div class="para">
                <p>This paragraph is for About Us</p>
            </div>
        </div>

        <div class="card">
            <h5>Our Goal</h5>
            <div class="para1">
                <p>This paragraph is for our goals</p>
            </div>
        </div>

        <div class="card">
            <h5>Our Values</h5>
            <div class="para">
                <p>This paragraph is for our values.</p>
            </div>
        </div>

    </div>
@endsection
