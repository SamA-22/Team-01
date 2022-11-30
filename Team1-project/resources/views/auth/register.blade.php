@extends('layouts.template')

@section('content')
    <section class="form">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="{{ route('register') }}">
                    @csrf

                    @error('email')
                        <div class="alert alert-info" role="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            {{ $message }}
                        </div>
                    @enderror

                    @error('password')
                        <div class="alert alert-info" role="alert">
                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                            {{ $message }}
                        </div>
                    @enderror
                    <!---------------------------- Name-------------------- -->
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input id="name" type="text" class="login__input" placeholder="Name"
                            @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                            autocomplete="name" autofocus>
                    </div>


                    <!----------------------------Email Address-------------------- -->
                    <div class="login__field">
                        <i class="login__icon fas fa-envelope"></i>
                        <input id="email" type="email" class="login__input" placeholder="Email Address"
                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                            autocomplete="email">

                    </div>

                    <!----------------------------Phone Number-------------------- -->
                    <div class="login__field">
                        <i class="login__icon fas fa-phone"></i>
                        <input id="phone" type="text" class="login__input" placeholder="Phone Number"
                            @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required
                            autocomplete="phone">
                    </div>

                    <!----------------------------Password-------------------- -->
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input id="password" type="password" class="login__input" placeholder="Password"
                            @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>

                    <!----------------------------Password Repeat-------------------- -->
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="login__input" placeholder="Repeat Password"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <!------Privcy Notice checkbox-------->
                    <input type="checkbox" name="checkbox" required><span>I agree to the <a
                            href="{{ asset('/privacyNotice') }}" style=" color: #5d0000;font">Privacy Policy for
                            HDC</a></span>

                    <!----------------------------Register Button-------------------- -->
                    <button class="button login__submit" type="submit">
                        <span class="button__text"> {{ __('Register') }}</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>

                    <br /><br />
                    <a class="btn-login-links" href="{{ asset('/login') }}">
                        {{ __('Already have an account?') }}
                    </a>
                </form>
            </div>


            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </section>
@endsection
