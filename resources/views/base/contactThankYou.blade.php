@extends("layouts.app")

@section("content")

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