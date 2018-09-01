@extends("layouts.app")

@section("content")

    <section class="base-section text-left">
        <section class="inner">
            <div class="row">
                <div class="col-md-5">
                    <h3>Vladimír Vráb</h3>
                    <p>
                        Martin (Slovakia), 19th of May 1993<br>
                        Nationality: Slovak<br>
                        Email: vladino.vrab@gmail.com<br>
                        Phone: (Slovak) 00421 902 739 429<br>
                        Driving license B<br>
                    </p>
                </div>
                <div class="my-face" style="background-image: url({{assetn("images/my-face.jpeg")}})"></div>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>SUMMARY</h2>
                <p></p>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>EDUCATION</h2>
                <p></p>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>WORK HISTORY</h2>
                <p></p>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>TECHNICAL SKILLS</h2>
                <p></p>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>MORE ABOUT TECHNICAL SKILLS</h2>
                <p></p>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>PROJECTS I TOUCHED</h2>
                <p></p>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>LANGUAGES</h2>
                <p></p>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>INTEREST & HOBBIES</h2>
                <p></p>
            </div>
        </section>
    </section>

    <section class="base-section base-section-dark">
        <section class="inner">
            {{--<h1>@lang("base.drugheader")</h1>--}}
            <div class="drugs-box row">


                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/laravel.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/nette.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/symfony.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/cakephp.png")}})"></div>

                <div class="resume-logo-space"></div>

                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/htmlcssjs.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/phpstorm.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/docker.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/git.png")}})"></div>

                <div class="resume-logo-space"></div>

                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/php.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/composer.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/mysql.png")}})"></div>
                <div class="drugs-box-inner resume-logo col-md-3" style="background-image: url({{assetn("images/logos/redis.png")}})"></div>

                <div class="resume-logo-space"></div>

                <div class="drugs-box-inner resume-logo col-md-12" style="background-image: url({{assetn("images/logos/ubuntu.png")}})"></div>
            </div>
        </section>
    </section>


@endsection