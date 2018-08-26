@extends("layouts.app")

@section("content")

    <section class="main-section main-section-offhome" >
        <section class="top-bar row">
            <section class="logo col-md-4">
                <a href="/{{App::getLocale()}}"><h1>vladino.me <span class="fas fa-laptop-code"></span></h1></a>
            </section>
            <nav class="navigation col-md-8">
                <ul class="lang-ul">
                    <li >
                        <a @if (App::getLocale() == "sk")
                           class="active"
                           @endif href="/sk">SK</a>
                    </li>
                    <li class="">
                        <a @if (App::getLocale() == "en")
                           class="active"
                           @endif  href="/en">EN</a>
                    </li>
                    <li class="">
                        <a @if (App::getLocale() == "de")
                           class="active"
                           @endif href="/de">DE</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="/{{App::getLocale() . "/"}}"
                           @if (Request::route()->getName() == "home") class="active" @endif>Home</a>
                    </li>
                    <li>
                        <a href="/{{App::getLocale() . "/resume"}}"
                        @if (Request::route()->getName() == "resume") class="active" @endif>Resume</a>
                    </li>
                    <li>
                        <a href="/{{App::getLocale() . "/contact"}}"
                           @if (Request::route()->getName() == "contact") class="active" @endif>Contact</a>
                    </li>
                </ul>
                <br class="clear">
            </nav>
        </section>
    </section>


    <section class="contact base-section">
        <div class="inner">
            <h1>Contact</h1>
            <div class="alert alert-success" role="alert">
                <h1 style="padding: 20px 10px;">Thank you! I got it <span class="fas fa-smile-wink"></span></h1>
            </div>
            <p>Feel free to ask me whatever you wish to.</p>
            <form action="/{{App::getLocale()}}/contact/submit" method="post" autocomplete="off">
                {{csrf_field()}}
                <div class="form-group">
                    <label >YOUR NAME:</label>
                    <input type="text" name="name" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label >YOUR E-MAIL:</label>
                    <input type="text" name="mail" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label >SUBJECT:</label>
                    <input type="text" name="subject" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label >TEXT:</label>
                    <textarea type="text" name="text" class="form-control" rows="7" autocomplete="off"></textarea>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="hvr-bounce-to-right" href="/{{App::getLocale() . "/resume"}}">SAY HELLO</button>
                </div>
            </form>
        </div>
    </section>

@endsection