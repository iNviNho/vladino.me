<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>vladino.me | @lang("base.titlemoto") </title>
    <meta name="description" content="@lang("base.description")">
    <meta property="og:image" content="{{ assetn("images/me-and-programming.JPG") }}" />
    <meta property="og:url" content="https://vladino.me" />
    <meta property="og:title" content="@lang("base.titlemoto")" />
    <meta property="og:description" content="@lang("base.description")" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ assetn('js/app.js')}}?{{$version}}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ assetn('css/app.css') }}?{{$version}}" rel="stylesheet">
    <link href="{{ assetn('css/respo.css') }}?{{$version}}" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ assetn("images/logo.png") }}">

    @if (env("APP_ENV") == "production")
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124630454-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-124630454-1');
        </script>
    @endif

</head>
<body>
    {{--MOBILE CONTENT--}}
    <div class="navigation-mobile-content">
        <div class="close-mobile-navigation">
            <span class="fas fa-times"></span>
        </div>
        <div class="navigation-mobile-content-inner">
            <a href="/{{App::getLocale()}}"><h1>vladino.me <span class="fas fa-laptop-code"></span></h1></a>
            <ul>
                <li>
                    <a href="{{route("home", ["locale" => App::getLocale()])}}"
                       @if (Request::route()->getName() == "home") class="active" @endif>@lang("base.home")</a>
                </li>
                <li>
                    <a href="{{route("resume", ["locale" => App::getLocale()])}}"
                       @if (Request::route()->getName() == "resume") class="active" @endif>@lang("base.resume")</a>
                </li>
                <li>
                    <a href="{{route("contact", ["locale" => App::getLocale()])}}"
                       @if (Request::route()->getName() == "contact") class="active" @endif>@lang("base.contact")</a>
                </li>
            </ul>
            <ul class="lang-ul">
                {{--LOCALES HANDLING--}}
                @foreach ($locales as $key => $value)
                    <li >
                        <a @if ($key == App::getLocale())
                           class="active"
                           @endif
                           href="{{route(Request::route()->getName(), ["locale" => $key])}}">{{$value}}</a>
                    </li>
                @endforeach
                <li >
                    <a class="inactive" href="#" data-toggle="tooltip" data-placement="left" title="@lang("base.comingsoon")!">DE</a>
                </li>
            </ul>
        </div>
        <h1 class="navigation-mobile-footer">“@lang("base.somesexyquote")“</h1>
    </div>

    <section class="main-section @if (Request::route()->getName() != "home") main-section-offhome @endif" >
        @if (Request::route()->getName() == "home")
            <div class="my-bg" style="background-image: url({{assetn("images/me-and-my-life.JPG")}})"></div>
        @endif
        <section class="top-bar @if (Request::route()->getName() == "home") top-bar-layout @endif">
            <section class="logo">
                <a href="/{{App::getLocale()}}"><h1>vladino.me <span class="fas fa-laptop-code"></span></h1></a>
            </section>
            <nav class="navigation navigation-desktop">
                <ul class="lang-ul">
                    {{--LOCALES HANDLING--}}
                    @foreach ($locales as $key => $value)
                        <li >
                            <a @if ($key == App::getLocale())
                               class="active"
                               @endif
                               href="{{route(Request::route()->getName(), ["locale" => $key])}}">{{$value}}</a>
                        </li>
                    @endforeach
                    <li >
                        <a class="inactive" href="#" data-toggle="tooltip" data-placement="left" title="@lang("base.comingsoon")!">DE</a>
                    </li>
                </ul>
                <ul>
                    {{--MENU HANDLING--}}
                    <li>
                        <a href="{{route("home", ["locale" => App::getLocale()])}}"
                           @if (Request::route()->getName() == "home") class="active" @endif>@lang("base.home")</a>
                    </li>
                    <li>
                        <a href="{{route("resume", ["locale" => App::getLocale()])}}"
                           @if (Request::route()->getName() == "resume") class="active" @endif>@lang("base.resume")</a>
                    </li>
                    <li>
                        <a href="{{route("contact", ["locale" => App::getLocale()])}}"
                           @if (Request::route()->getName() == "contact") class="active" @endif>@lang("base.contact")</a>
                    </li>
                </ul>
                <br class="clear">
            </nav>
            <div class="navigation navigation-mobile">
                <span class="fas fa-bars"></span>
            </div>
            <br class="clear">
        </section>

        @if (Request::route()->getName() == "home")
        <section class="main-quote">
            <h1 class="first">@lang("base.motofirst")</h1>
            <h1 class="second">@lang("base.motosecond")</h1>
            <h1 class="third">@lang("base.motothird")</h1>
        </section>
        <div class="arrow">
            <span class="fas fa-chevron-down"></span>
        </div>
        @endif

    </section>

    <section>
        @yield('content')
    </section>

    <section class="footer">
        <section class="footer-inner">
            <h1>“@lang("base.somesexyquote")“</h1>
            <ul class="menu-review">
                <li>
                    <a href="{{route("home", ["locale" => App::getLocale()])}}">@lang("base.home")</a>
                </li>
                <li>
                    <a href="{{route("resume", ["locale" => App::getLocale()])}}">@lang("base.resume")</a>
                </li>
                <li>
                    <a href="{{route("contact", ["locale" => App::getLocale()])}}">@lang("base.contact")</a>
                </li>
            </ul>
            <p>@lang("base.norightsreserved")</p>
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
