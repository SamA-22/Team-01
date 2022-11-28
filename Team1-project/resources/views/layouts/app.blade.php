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

</head>

<body>
    <!--NavBar-------------------->
    <!-- <div class="topnav">-->
    @guest
        <header id="main-header">
            <a > <img id="logo" src="{{ URL::asset('/images/HDCwhite.png') }}" alt="HDC-logo"
                    style="float:none;width:250px;height:150px;"></a>

            <nav class="navigation">
                <a href="{{ asset('') }}">Home</a>
                <a href="{{ asset('/products') }}">Shop</a>
                <a href="sizechart.html">Size Chart</a>
                <a href="contact.html">Contact</a>
                <a href="#"> </a>

                <div class="dropdown">
                    <button class="dropbtn">
                        <i class='fas fa-user-circle'></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('login') }}">Sign In</a>
                        <a href="{{ route('register') }}">Join</a>

                    </div>
                </div>

            </nav>
        </header>



        <!-- Authentication Links -->
    @else
        <!--If user is logged in-->
        @if (Route::has('login'))
            <div>
                @auth
                    <header id="main-header">
                        <a> <img src="{{ URL::asset('/images/HDCwhite.png') }}" alt="HDC-logo"
                                style="float:none;width:250px;height:150px;"></a>
                        <nav class="navigation">
                            <a href="{{ url('') }}">Home</a>
                            <a href="{{ asset('products') }}">Shop</a>
                            <a href="sizechart.html">Size Chart</a>
                            <a href="contact.html">Contact</a>


                            <div class="dropdown">
                                <button class="dropbtn">{{ Auth::user()->name }}
                                    <i class='fas fa-user-circle'></i>
                                </button>
                                <div class="dropdown-content">
                                    <a href="{{ url('/home') }}"><i class="fa-solid fa-user"></i> My Account</a>
                                    <a href="#"><i class="fa-solid fa-box"></i> My Orders</a>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                        <i class='fas fa-power-off'></i> Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </header>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    @endguest


    <main>
        @yield('content')
    </main>




    <!--The footer-->
    <footer class="footer">
        <img src="{{ URL::asset('/images/HDCwhite.png ') }}" alt="HDC-logo"
            style="float:none; width:220px; height:100px;">
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
