@extends('layouts.template')

@section('content')

<section class="form">
        <div class="screen">
            <div class="screen__content">
                <form class="login" method="POST" action="{{ route('login') }}">
                    @csrf

                    <!--Error Message if the email is wrong-->
                    @error('email')
                    <div class="alert alert-info" role="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        {{ $message }}
                    </div>
                @enderror
           <!--Error Message if the email is wrong-->
                @error('password')
                <div class="alert alert-info" role="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    {{ $message }}
                </div>
            @enderror

                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input id="email" type="email" class="login__input" placeholder="Email Address"
                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                    </div>

                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input id="password" type="password" class="login__input" placeholder="Password"
                            @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">
                    </div>


                    <button class="button login__submit" type="submit">
                        <span class="button__text">{{ __('Login') }}</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button> <br /><br />

                    @if (Route::has('password.request'))
                        <a class="btn-login-links" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <br /><br />
                    <a class="btn-login-links" href="{{ asset('/register') }}">
                        {{ __('Not have an account yet?') }}
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
