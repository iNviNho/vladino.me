@extends("layouts.app")

@section("content")

    <section class="contact base-section">
        <div class="inner">
            <h1>@lang("base.contactsmall")</h1>
            <p>@lang("base.contacttext")</p>
            <form action="/{{App::getLocale()}}/contact/submit" method="post" autocomplete="off">
                {{csrf_field()}}
                <div class="form-group">
                    <label >@lang("base.contactname"):</label>
                    <input type="text" name="name" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label >@lang("base.contactmail"):</label>
                    <input type="text" name="mail" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label >@lang("base.contactsubject"):</label>
                    <input type="text" name="subject" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label >TEXT:</label>
                    <textarea type="text" name="text" class="form-control" rows="7" autocomplete="off"></textarea>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="hvr-bounce-to-right" href="/{{App::getLocale() . "/resume"}}">@lang("base.contactsayhello")</button>
                </div>
            </form>
        </div>
    </section>

@endsection