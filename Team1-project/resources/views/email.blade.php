@extends('layouts.template')

@section('content')

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us Page</title>
        <link href="https://fonts.googleapis.com/css?family=Playfair%20Display:300,400,500,700" rel="stylesheet">
        <link href="{{ asset('assets/css/contactUs.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="main">
            <div class="leftSection">
                <div class="logo">
                    <img src="images/logo.png" alt="HDC Logo" width="250" height="250">
                </div>
                <h1>Contact Us</h1>
                <p>Whether to ask a question or to give us feedback, feel free to contact us and we will be sure to handle any concerns you may have. This will automatically send an email to hdc.retail@gmail.com, you can also chose to email us directly.</p>
            </div>
            <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post" id="contactUs-form">
                @csrf
                <div class="title">
                    <h2>Contact Form</h2>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                {{ session()->get('message') }}
                </div>
                @endif

                <div class="info">
                    <div class="wrap-input100 validate-input" data-validate = "Name is required">
                        <input class="input100" type="text" name="name" placeholder="Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Subject is required">
                        <input class="input100" type="text" name="subject" placeholder="subject">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                        @error('subject')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>


                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea class="input100" name="content" placeholder="Inquiry"></textarea>
                        <span class="focus-input100"></span>
                        @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

                <div class="checkbox">
                    <input id="cb" type="checkbox" name="checkbox" required><span>I agree to the <a href="Temp">Privacy Poalicy for HDC</a></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn">
                        Submit
                    </button>
                </div>
                <script>
                    function required() {
                        var button = document.getElementById("cb").required;
                        document.getElementById("sudo").innerHTML = button;
                    }
                </script>
            </form>
        </div>
    </body>
</html>

@endsection
