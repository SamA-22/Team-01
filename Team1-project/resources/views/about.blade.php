@extends('layouts.template')

@section('content')
    <br>
    <br>
    <div class="homeSlideshow">
        <div class="SSlides fade">
            <img src="images/red.jpg" style="width:100%">
        </div>

        <div class="SSlides fade">
            <img src="images/blue.jpg" style="width:100%">
        </div>

        <div class="SSlides fade">
            <img src="images/green.jpg" style="width:100%">
        </div>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

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

    <div class="abouth5" id="about">
        <p>About Us</p>
    </div>
    <div class="card1">
        <h5>Our Story</h5>
        <div class="para1">
            <p>We believe in affordable fashion for all. We aim to bring you the latest styles for less of a strain on your
                wallet. Our mission is to deliver comfy Jumpers and T-Shirts for everyone to empower you to look and feel
                confident. Everything we create is informed by our audience, along with influences on social media. </p>
        </div>
    </div>
    </div>
    <br>
    <br>
    <br>
@endsection
