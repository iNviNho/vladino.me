<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>vladino.me | developer</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ assetn('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ assetn('css/app.css') }}?{{rand(1,250)}}" rel="stylesheet">

    {{--<link rel="icon" type="image/png" href="{{ assetn("images/h.png") }}">--}}

</head>
<body>
    <section class="main-section" style="background-image: url({{assetn("images/IMG_501888.jpg")}})">
        <section class="top-bar row">
            <section class="logo col-md-4">
                <h1>vladino.me</h1>
            </section>
            <nav class="navigation col-md-8">
                <ul class="lang-ul">
                    <li >
                        <a class="active" href="">SK</a>
                    </li>
                    <li class="">
                        <a href="">EN</a>
                    </li>
                    <li class="">
                        <a href="">DE</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a class="active" href="">Home</a>
                    </li>
                    <li>
                        <a href="">Resume</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
                <br class="clear">
            </nav>
        </section>

        <section class="main-quote">
            <h1>enthusiastic young developer</h1>
        </section>

    </section>

    <section>
        @yield('content')
    </section>

    <section class="footer">
        <section class="footer-inner">
            <h1>“some sexy quote“</h1>
            <ul class="menu-review">
                <li>
                    <a class="active" href="">Home</a>
                </li>
                <li>
                    <a href="">Resume</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
            <p>@2018 No rights reserved. Feel free to share or use whatever you wish to.</p>
            <ul class="social-icons">
                <li>
                    <a href="https://www.facebook.com/vladinoo.vrab"><span class="fab fa-facebook-square"></span></a>
                </li>
                <li>
                    <a href="https://sk.linkedin.com/in/vladim%C3%ADr-vr%C3%A1b-73a441119"><span class="fab fa-linkedin"></span></a>
                </li>
                <li>
                    <a href="https://github.com/iNviNho"><span class="fab fa-github"></span></a>
                </li>
            </ul>
        </section>
    </section>

</body>
</html>
