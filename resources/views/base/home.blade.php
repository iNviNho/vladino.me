@extends("layouts.app")

@section('content')

    <section class="base-section">
        <section class="inner">
            <h1>Who am I?</h1>
            <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form, by injected
                humour, or randomised words which
                <br><br>
                It is a long established fact that a reader will be distracted by the
                readable content of a page when looking at its layout. The point of
                using Lorem Ipsum is that it has a more-or-less normal distribution of
                letters, as opposed to using 'Content here, content here', making it
                look like readable English. Many desktop publishing packages and web
                page editors now use Lorem Ipsum as their default model text,
                <br><br>And a for 'lorem ipsum' will uncover many web sites still in their
                infancy. Various versions have evolved over the years, sometimes by
                accident, sometimes on purpose (injected humour and the like).
            </p>
            <a class="hvr-bounce-to-right" href="{{App::getLocale() . "/resume"}}">@lang("base.resume")</a>
        </section>
    </section>


    <section class="base-section base-section-dark">
        <section class="inner">
        <h1>Drugs a developer like me is addicted to</h1>
        <div class="drugs-box row">
            <div class="drugs-box-inner col-md-2">
                <span class="fas fa-kiss-wink-heart"></span>
                <h3>@lang("base.druglove")</h3>
                <p>No man can live without a love</p>
            </div>
            <div class="drugs-box-inner col-md-2">
                <span class="fas fa-home"></span>
                <h3>@lang("base.drughome")</h3>
                <p>Place where we come no matter how hard we failed</p>
            </div>
            <div class="drugs-box-inner col-md-2">
                <span class="fas fa-user-friends"></span>
                <h3>@lang("base.drugfriends")</h3>
                <p>People we choose to be with</p>
            </div>
            <div class="drugs-box-inner col-md-2">
                <span class="fas fa-laptop-code"></span>
                <h3>@lang("base.drugcoding")</h3>
                <p>Love what you do. Love what you developer. Love the value.</p>
            </div>
            <div class="drugs-box-inner col-md-2">
                <span class="fas fa-paw"></span>
                <h3>@lang("base.drugdog")</h3>
                <p>Somebody who teaches us to be loyal, good and always happy.</p>
            </div>
            <div class="drugs-box-inner col-md-2">
                <span class="fas fa-car"></span>
                <h3>@lang("base.drugcar")</h3>
                <p>Speed, technologies and the beauty on 4 wheels.</p>
            </div>
        </div>
        </section>
    </section>

    <section class="base-section">
        <section class="inner">
            <h1>@lang("base.lifeofadeveloper")</h1>

            <div class="gallery-wrapper">
                <div class="gallery-box"></div>
                <div class="gallery-box"></div>
                <div class="gallery-box"></div>
                <div class="gallery-box"></div>

                <div class="gallery-box"></div>
                <div class="gallery-box"></div>
                <div class="gallery-box"></div>
                <div class="gallery-box"></div>

                <br class="clear">
            </div>

            <br class="clear">

            <a class="hvr-bounce-to-right" href="contact">@lang("base.contact")</a>

        </section>
    </section>

@endsection