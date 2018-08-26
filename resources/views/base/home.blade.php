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
            <a class="hvr-bounce-to-right" href="{{App::getLocale() . "/resume"}}">RESUME</a>
        </section>
    </section>


    <section class="base-section base-section-dark">
        <section class="inner">
        <h1>Drugs a developer like me is addicted to</h1>
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
            <a class="hvr-bounce-to-right" href="">RESUME</a>
        </section>
    </section>

    <section class="base-section">
        <section class="inner">
            <h1>Life of a developer</h1>

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

            <a class="hvr-bounce-to-right" href="contact">CONTACT</a>

        </section>
    </section>

@endsection