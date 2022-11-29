<!Doctype HTML>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ "High Definition Clothing"}}</title>


    <!--The icon/favicon  of the website-->
    <link rel="icon" href="{{ URL::asset('/images/favicon.ico') }}" type="image/x-icon" />

    <!-----------------------Style---------------------->
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">

    <!--Icons that have been used in the website (https://fontawesome.com/)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

</head>

<body>

    @include('partials.SideNavBar')
    @include('partials.header')
    @yield('content')
    @include('partials.footer')

</body>


</html>
