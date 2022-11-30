@extends('layouts.template')

@section('content')
    <section class="form">
        <div class="screen">
            <div class="screen__content">

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="login" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input id="email" type="email" class="login__input" placeholder="Email Address"
                            @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required
                            autocomplete="email" autofocus>
                    </div>
                    <br><br>
                    <button class="button login__submit" type="submit">
                        <span class="button__text">{{ __('Send Password Reset Link') }}</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button> <br /><br />

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
