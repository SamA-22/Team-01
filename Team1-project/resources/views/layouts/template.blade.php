<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title of the website-->
    <title>{{ 'High Definition Clothing' }}</title>

    <!--The icon/favicon  of the website-->
    <link rel="icon" href="{{ URL::asset('/images/favicon.ico') }}" type="image/x-icon" />

    <!-- Styles -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Login Styles -->
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">

    <!--Icons that have been used in the website (https://fontawesome.com/)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/fbb2a87a39.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3eb214850d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


</head>

<body>
    <!------------------NavBar-------------------->
    @guest
        <div class="header">
            <img src="images/HDC.png " style="float:none;width:350px;height:140px;">
        </div>

        <div class="topnav">
            <a href="{{ asset('') }}">Home</a>
            <a href="{{ asset('') }}">About</a>
            <a href="{{ asset('/products') }}">Shop</a>
            <a href="{{ asset('/sizeChart') }}">Size Chart</a>
            <a href="{{ asset('/email') }}">Contact</a>
            <a href="{{ url('showCart') }}" style="padding-left: 23%"><i class="fas fa-shopping-cart"></i></a>

            <div class="dropdown">
                <a class="dropbtn">
                    <i class='fas fa-user-circle'></i>
                </a>
                <div class="dropdown-content">
                    <a href="{{ route('login') }}">Sign In</a>
                    <a href="{{ route('register') }}">Join</a>

                </div>
            </div>
        </div>
    @else
        <!--If user is logged in-->
        @if (Route::has('login'))
            <div>
                @auth
                    <div class="header">
                        <img src="images/HDC.png " style="float:none;width:350px;height:140px;">
                    </div>

                    <div class="topnav">
                        <a href="{{ asset('') }}">Home</a>
                        <a href="{{ asset('') }}">About</a>
                        <a href="{{ asset('/products') }}">Shop</a>
                        <a href="{{ asset('/sizeChart') }}">Size Chart</a>
                        <a href="{{ asset('/email') }}">Contact</a>
                        <a href="{{ url('showCart') }}"><i class="fas fa-shopping-cart"></i></a>
                        <div class="dropdown">
                            <a class="dropbtn">{{ Auth::user()->name }}
                                <i class='fas fa-user-circle'></i>
                            </a>
                            <div class="dropdown-content">
                                <a href="{{ url('/home') }}"><i class="fa-solid fa-user"></i> My Account</a>
                                <a href="{{ asset('/orders-history') }}"><i class="fa-solid fa-box"></i> My Orders</a>
                                <a href="{{ asset('/dashboard') }}"><i class="fa-solid fa-people-roof"></i></i> Admin Panel</a>

                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                    <i class='fas fa-power-off'></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    @endguest


    <!-------------------------Main Content------------------------------>
    <main>
        @yield('content')
    </main>



    <!--Footer Content--------------->
    <footer>
        <div class="footer-content">
            <div class="ftimage">
                <img src="images/HDCwhite.png " style="float:none; width:280px; height:120px;">
                <p>Founded in 2022, High Definition Clothing is a British luxury fashion label.<br>
                    Our garments are the embodiment of relentless effort, refinement and constant progression. Each
                    product is the result of expert craftsmanship being a relentless factor running throughout every
                    piece of my store. Our goal is simple, to create the best quality products in the world.</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-snapchat-ghost"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy; <a href="#">HighDefinitionClothing</a> </p>
                <div class="footer-menu">
                    <ul class="f-menu">
                        <li><a href="{{ asset('/term&conditions') }}">Terms & Conditions</a></li>
                        <li><a href="{{ asset('/refundPolicy') }}">Refunds & Returns</a></li>
                    </ul>
                </div>
            </div>
    </footer>

</html>
