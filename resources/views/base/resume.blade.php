@extends("layouts.app")

@section("content")

    <section class="base-section text-left">
        <section class="inner">
            <div class="">
                <div class="my-info">
                    <h3>Vladimír Vráb</h3>
                    <p>
                        @lang("base.myinfo")
                    </p>
                </div>
                <div class="my-face" style="background-image: url({{assetn("images/vladimir-vrab.jpg")}})"></div>
                <br class="clear">
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.summary")</h2>
            </div>
            <p>@lang("base.summarytext1")</p>
            <ul>
                @lang("base.summarytext2")
            </ul>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.education")</h2>
                <p></p>
            </div>
            <table class="table table-bordered table-mobile-hidden">
                <tbody>
                <tr>
                    <td class="years-column"><span class="fas fa-calendar-alt"></span> 2012 - 2015</td>
                    <td>@lang("base.educationschool")</td>
                </tr>
                <tr>
                    <td class="years-column"><span class="fas fa-calendar-alt"></span> 2016</td>
                    <td><strong>@lang("base.educationnettecertificate")</strong></td>
                </tr>
                </tbody>
            </table>
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="text-right"><span class="fas fa-calendar-alt"></span> 2012 - 2015</li>
                    <li>@lang("base.educationschool")</li>
                    <li class="text-right"><span class="fas fa-calendar-alt"></span> 2016</li>
                    <li>@lang("base.educationnettecertificate")</li>
                </ul>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin ">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.workhistory")</h2>
            </div>
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">@lang("base.selfemployed")</td>
                    <td class="years-column years-column-right"><span class="fas fa-calendar-alt"></span> 2012 - 2013</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.firststeps")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.firststepstext")
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">ARTEXE</td>
                    <td class="years-column years-column-right"><span class="fas fa-calendar-alt"></span> 2013 - 2018</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.artexeheader")</strong></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.artexetext")
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>
            <table class="table table-bordered table-resume">
                <tr>
                    <td colspan="2">BITPANDA</td>
                    <td class="years-column years-column-right"><span class="fas fa-calendar-alt"></span> 2018 - @lang("base.now")</td>
                </tr>
                <tr>
                    <td colspan="3"><strong>@lang("base.bitpandaheader")</strong></td>
                </tr>
                <tr>
                <tr>
                    <td colspan="3">
                        <ul>
                            @lang("base.bitpandatext")
                        </ul>
                    </td>
                </tr>
            </table>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.technicalskills")</h2>
            </div>
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td style="white-space: nowrap;"><strong>@lang("base.programminglanguages")</strong></td>
                    <td>HTML, CSS, JavaScript, PHP, SQL</td>
                </tr>
                <tr>
                    <td><strong>PHP Frameworks</strong></td>
                    <td>Laravel, Lumen, Nette, CakePHP @lang("base.basics"), Symfony @lang("base.basics")</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.databases")</strong></td>
                    <td>MySQL, Redis</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.softwaretools")</strong></td>
                    <td>PHPStorm, Datagrip, Postman, GitLab, GitHub</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.libandtools")</strong></td>
                    <td>Doctrine 2 ORM, CakePHP ORM, Eloquent ORM, WebGL, Sentry, Graylog, Twilio, Nexmo, Amazon SQS, Latte, Blade, Bootstrap, jQuery,
                        Docker, GIT, Guzzle, cURL, SSH, OpenVPN, PHPUnit, Webhook, Composer,  Certbot, Bash, Google analytics, Heatmaps</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.hobbylanguages")</strong></td>
                    <td>Java (OpenGL)</td>
                </tr>
                <tr>
                    <td><strong>@lang("base.operationsystem")</strong></td>
                    <td>Ubuntu</td>
                </tr>
            </table>
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="bold">@lang("base.programminglanguages")</li>
                    <li>HTML, CSS, JavaScript, PHP, SQL</li>
                    <li class="bold">PHP Frameworks</li>
                    <li>Laravel, Lumen, Nette, CakePHP @lang("base.basics"), Symfony @lang("base.basics")</li>
                    <li class="bold">@lang("base.databases")</li>
                    <li>MySQL, Redis</li>
                    <li class="bold">@lang("base.softwaretools")</li>
                    <li>PHPStorm, Datagrip, Postman, GitLab, GitHub</li>
                    <li class="bold">@lang("base.libandtools")</li>
                    <li>Doctrine 2 ORM, CakePHP ORM, Eloquent ORM, WebGL, Sentry, Graylog, Twilio, Nexmo, Amazon SQS, Latte, Blade, Bootstrap, jQuery,
                        Docker, GIT, Guzzle, cURL, SSH, OpenVPN, PHPUnit, Webhook, Composer,  Certbot, Bash, Google analytics, Heatmaps</li>
                    <li class="bold">@lang("base.hobbylanguages")</li>
                    <li>Java (OpenGL)</li>
                    <li class="bold">@lang("base.operationsystem")</li>
                    <li>Ubuntu</li>
                </ul>
            </div>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.projectsitouched")</h2>
            </div>

            {{--NORMAL TABLE--}}
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.myfirstwebsite1")</strong></td>
                    <td>@lang("base.myfirstwebsite2")</td>
                </tr>
                <tr>
                    <td class="left-same-column">@lang("base.examples")</td>
                    <td>
                        <ul>
                            <li>
                                <a href="http://www.ekotrim.sk" target="_blank" class="link">www.ekotrim.sk</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            {{--RESPO TABLE --}}
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="bold">@lang("base.myfirstwebsite1")</li>
                    <li>@lang("base.myfirstwebsite2")</li>
                    <li class="bold">@lang("base.examples")</li>
                    <li><a href="http://www.ekotrim.sk" target="_blank" class="link">www.ekotrim.sk</a></li>
                </ul>
            </div>

            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>

            @section("customexamples1")
                <ul>
                    <li>
                        <a class="link" target="_blank" href="http://www.artexe.sk">www.artexe.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.marcormirelli.co">www.marcormirelli.com</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.m.marcomirelli.com">www.m.marcomirelli.com</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.hustra.sk">www.hustra.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.liver.sk">www.liver.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.infektologia.sk">www.infektologia.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.cinemadesign.sk">www.cinemadesign.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.alcoholkiller.com">www.alcoholkiller.com</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.informovanieapublicita.sk">www.informovanieapublicita.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.autoclinic.sk">www.autoclinic.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.gladstudio.se">www.gladstudio.se</a>
                    </li>
                </ul>
            @endsection
            @section("customexamples2")
                <ul>
                    <li>
                        <a class="link" target="_blank" href="http://www.veloxsro.sk">www.veloxsro.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.greatdrinks.sk">www.greatdrinks.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.pizzeriarimini.sk">www.pizzeriarimini.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.studyinslovakia.org">www.studyinslovakia.org</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.scanit.sk">www.scanit.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.plus360.eu">www.plus360.eu</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.konsolidacna.eu">www.konsolidacna.eu</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.bistrorambus.sk">www.bistrorambus.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.agroslavinvest.sk">www.agroslavinvest.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.biofit.sk">www.biofit.sk</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="http://www.imcopower.sk">www.imcopower.sk</a>
                    </li>
                </ul>
            @endsection
            {{--NORMAL TABLE--}}
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.customwebsites1")</strong></td>
                    <td>
                        @lang("base.customwebsites2")
                    </td>
                </tr>
                <tr>
                    <td class="left-same-column">@lang("base.examples")</td>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                @yield("customexamples1")
                            </div>
                            <div class="col-md-6">
                                @yield("customexamples2")
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>@lang("base.honorablemention")</td>
                    <td>
                        <ul>
                            <li>
                                <a class="link" target="_blank" href="https://www.awwwards.com/sites/glad-studio">www.gladstudio.se</a> <span class="fas fa-award"></span>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            {{--RESPO TABLE --}}
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="bold">@lang("base.customwebsites1")</li>
                    <li>@lang("base.customwebsites2")</li>
                    <li class="bold">@lang("base.examples")</li>
                    <li>
                        @yield("customexamples1")
                        @yield("customexamples2")
                    </li>
                    <li class="bold">@lang("base.honorablemention")</li>
                    <li>
                        <a class="link" target="_blank" href="https://www.awwwards.com/sites/glad-studio">www.gladstudio.se</a> <span class="fas fa-award"></span>
                    </li>
                </ul>
            </div>

            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>

            {{--NORMAL TABLE--}}
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.customis1")</strong></td>
                    <td>
                        @lang("base.customis2")
                    </td>
                </tr>
                <tr>
                    <td>@lang("base.examples")</td>
                    <td>
                        <ul>
                        @lang("base.customis3")
                        </ul>
                    </td>
                </tr>
            </table>
            {{--RESPO TABLE --}}
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="bold">@lang("base.customis1")</li>
                    <li>@lang("base.customis2")</li>
                    <li class="bold">@lang("base.examples")</li>
                    <li>
                        <ul>
                            @lang("base.customis3")
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>

            {{--NORMAL TABLE--}}
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.customapi1")</strong></td>
                    <td>
                        <ul>
                            @lang("base.customapi2")
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>@lang("base.examples")</td>
                    <td>
                        <ul>
                            <li>
                                <a class="link" href="https://www.bitpanda.com">www.bitpanda.com</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            {{--RESPO TABLE --}}
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="bold">@lang("base.customapi1")</li>
                    <li>
                        <ul>
                            @lang("base.customapi2")
                        </ul>
                    </li>
                    <li class="bold">@lang("base.examples")</li>
                    <li><a class="link" href="https://www.bitpanda.com">www.bitpanda.com</a></li>
                </ul>
            </div>

            <div class="arrow-inner">
                <span class="fas fa-arrow-down"></span>
            </div>

            {{--NORMAL TABLE--}}
            @section("customprojects1")
                <ul>
                    <li>
                        <a class="link" target="_blank" href="https://github.com/iNviNho/vladinome">vladinome</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="https://github.com/iNviNho/hazarder">hazarder</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="https://github.com/iNviNho/nginxdb">nginxdb</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="https://github.com/iNviNho/webhook">webhook</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="https://github.com/iNviNho/helpers">helpers</a>
                    </li>
                    <li>
                        <a class="link" target="_blank" href="https://github.com/iNviNho/PayBySquareQRCodeGenerator">PayBySquareQRCodeGenerator</a>
                    </li>
                </ul>
            @endsection
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td class="left-same-column"><strong>@lang("base.customprojects1")</strong></td>
                    <td>
                        @lang("base.customprojects2")
                    </td>
                </tr>
                <tr>
                    <td>@lang("base.examples")</td>
                    <td>
                        @yield("customprojects1")
                    </td>
                </tr>
            </table>
            {{--RESPO TABLE --}}
            <div class="table-mobile-show">
                <ul class="ul-tablelized">
                    <li class="bold">@lang("base.customprojects1")</li>
                    <li>@lang("base.customprojects2")</li>
                    <li class="bold">@lang("base.examples")</li>
                    <li>
                        @yield("customprojects1")
                    </li>
                </ul>
            </div>

        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.languages")</h2>
            </div>
            <table class="table table-bordered table-mobile-hidden">
                <tr>
                    <td><strong>@lang("base.languagesnormal")</strong></td>
                    <td><strong>@lang("base.slovak")</strong></td>
                    <td><strong>@lang("base.english")</strong></td>
                    <td><strong>@lang("base.german")</strong></td>
                    <td><strong>@lang("base.russian")</strong></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>@lang("base.native")</td>
                    <td>C1</td>
                    <td>A1</td>
                    <td>A1</td>
                </tr>
            </table>
            <table class="table table-bordered table-mobile-show">
                <tr>
                    <td class="nowrap bold">@lang("base.languagesnormal")</td>
                    <td>Level</td>
                </tr>
                <tr>
                    <td class="nowrap bold">@lang("base.slovak")</td>
                    <td>@lang("base.native")</td>
                </tr>
                <tr>
                    <td class="nowrap bold">@lang("base.english")</td>
                    <td>C1</td>
                </tr>
                <tr>
                    <td class="nowrap bold">@lang("base.german")</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td class="nowrap bold">@lang("base.russian")</td>
                    <td>A1</td>
                </tr>
            </table>
        </section>
    </section>

    <section class="base-section text-left alter-margin">
        <section class="inner">
            <div class="special-line">
                <div class="line"></div>
                <h2>@lang("base.interesthobbies")</h2>
            </div>
            <ul>
                @lang("base.interesthobbiesli")
            </ul>
        </section>
    </section>

    <section class="base-section base-section-dark">
        <section class="inner">
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

                <div class="drugs-box-inner resume-logo resume-logo-ubuntu col-md-12" style="background-image: url({{assetn("images/logos/ubuntu.png")}})"></div>
            </div>
        </section>
    </section>


@endsection