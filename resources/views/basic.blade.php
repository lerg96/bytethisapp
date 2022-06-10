<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="WebSite para promover distintos trabajos hechos en distintos lenguajes de programación">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ByteThisApp</title>

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="{{asset('manifest.json')}}">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Byte This App">
    <link rel="icon" sizes="192x192" href="{{asset('images/touch/chrome-touch-icon-192x192.png')}}">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Byte This App">
    <link rel="apple-touch-icon" href="{{asset('images/touch/apple-touch-icon.png')}}">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="{{asset('images/touch/ms-touch-icon-144x144-precomposed.png')}}">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .proyectos {
            cursor: -moz-zoom-in;
            cursor: -webkit-zoom-in;
            cursor: zoom-in;
        }
        .proyectos h3 {
          margin-top: 0 !important;
        }
    </style>
</head>

<body>
    <div class="loader">
        <div>
            <b>
                <h1>
                    <span class="animated bounce infinite">C</span>
                    <span class="animated bounce infinite" style="animation-delay: 0.05s">A</span>
                    <span class="animated bounce infinite" style="animation-delay: 0.1s">R</span>
                    <span class="animated bounce infinite" style="animation-delay: 0.15s">G</span>
                    <span class="animated bounce infinite" style="animation-delay: 0.2s">A</span>
                    <span class="animated bounce infinite" style="animation-delay: 0.25s">N</span>
                    <span class="animated bounce infinite" style="animation-delay: 0.3s">D</span>
                    <span class="animated bounce infinite" style="animation-delay: 0.35s">O</span>
                </h1>
            </b>
        </div>
    </div>
    <div id="fullpage">
        <!-- Header -->
        <section id="section1" class="section">
            <header>
                <canvas id="granim-canvas"></canvas>
                <h1 class="text-center bestlover">Byte This App<br>
                    <small>@lang('messages.welcome')</small><br>
                    <small style="font-size: 15%;">By  <span style="color: coral;">Luis Romero</span></small>
                </h1>
            </header>
        </section>
        <!-- Acerca -->
        <section id="section2" class="section">
            <div class="container">
                <div class="col-md-7 text-center" data-aos="zoom-in-right">
                    <h1>@lang('messages.title')<br>
                        <small>@lang('messages.response')</small>
                    </h1>
                </div>
                <div class="col-md-5 text-center hidden-xs" data-aos="zoom-in-left">
                    <i class="fa fa-code" style="font-size: 20vw; color: orangered;"></i>
                </div>
            </div>
        </section>
        <!-- Skills -->
        <section id="section3" class="section">
            <!-- Titulo -->
            <div class="slide" id="slide1">
                <h1 data-aos="fade-right" class="bestlover text-center">@lang('messages.habs')</h1>
            </div>
            <!-- Lenguajes -->
            <div class="slide" id="slide2">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="bestlover">@lang('messages.langs')</h1>
                    </div>
                    <!-- php -->
                    <div data-count="HIGH" class="col-md-3 col-xs-6 badge-green is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-php-plain colored center-block text-center" style="font-size: 10vw;"></i>
                        </div>
                    </div>
                    <!-- css3 -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-css3-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- javascript -->
                    <div data-count="HIGH" class="col-md-3 col-xs-6 badge-green is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-javascript-plain colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- typescript -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-typescript-plain colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- ruby -->
                    <div data-count="LOW" class="col-md-3 col-xs-6 badge-red is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-ruby-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- Java -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-java-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- html5 -->
                    <div data-count="HIGH" class="col-md-3 col-xs-6 badge-green is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-html5-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- python -->
                    <div data-count="LOW" class="col-md-3 col-xs-6 badge-red is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-python-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Frameworks -->
            <div class="slide" id="slide3">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="bestlover">@lang('messages.fw')</h1>
                    </div>
                    <!-- Laravel -->
                    <div data-count="HIGH"
                        class="col-sm-4 col-sm-offset-0 col-xs-offset-3 col-xs-6 badge-green is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-laravel-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw;"></i>
                        </div>
                    </div>
                    <!-- Vue -->
                    <div data-count="HIGH"
                        class="col-sm-4 col-sm-offset-0 col-xs-offset-3 col-xs-6 badge-green is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-vuejs-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- Bootstrap -->
                    <div data-count="HIGH"
                        class="col-sm-4 col-sm-offset-0 col-xs-offset-3 col-xs-6 badge-green is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-bootstrap-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Otros -->
            <div class="slide" id="slide4">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="bestlover">@lang('messages.anothers')</h1>
                    </div>
                    <!-- amazonwebservices -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-amazonwebservices-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw;"></i>
                        </div>
                    </div>
                    <!-- Angular 2 -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-angularjs-plain colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- Django -->
                    <div data-count="LOW" class="col-md-3 col-xs-6 badge-red is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-django-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- Drupal -->
                    <div data-count="LOW" class="col-md-3 col-xs-6 badge-red is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-drupal-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- rails -->
                    <div data-count="LOW" class="col-md-3 col-xs-6 badge-red is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-rails-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- codeigniter -->
                    <div data-count="LOW" class="col-md-3 col-xs-6 badge-red is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-codeigniter-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- android -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-android-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw;"></i>
                        </div>
                    </div>
                    <!-- jquery -->
                    <div data-count="HIGH" class="col-md-3 col-xs-6 badge-green is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-jquery-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- mongodb -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-mongodb-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- mysql -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-mysql-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- postgresql -->
                    <div data-count="MED" class="col-md-3 col-xs-6 badge-yellow is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-postgresql-plain-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                    <!-- react -->
                    <div data-count="LOW" class="col-md-3 col-xs-6 badge-red is-animated">
                        <div class="col-md-12 well">
                            <i class="devicon-react-original-wordmark colored center-block text-center"
                                style="font-size: 10vw; text-align: center"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Proyectos -->
        <section id="section4" class="section">
            <!-- Titulo -->
            <div class="slide" id="slide1">
                <h1 data-aos="fade-right" class="bestlover text-center">@lang('messages.portafolio')</h1>
            </div>
            <!-- Lenguajes -->
            <div class="slide" id="slide2">
                <div class="container">
                    <div class="col-md-4 col-xs-12 is-animated proyectos" data-img="/images/proyectos/mms.png">
                        <div class="col-md-12 well">
                            <img class="proyectos-img" src="/images/proyectos/mms.png" alt="">
                            <h3 class="text-center">Proyecto MMS</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 is-animated proyectos" data-img="/images/proyectos/saro.png">
                        <div class="col-md-12 well">
                            <img class="proyectos-img" src="/images/proyectos/saro.png" alt="">
                            <h3 class="text-center">Proyecto SARO</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 is-animated proyectos" data-img="/images/proyectos/camargues.png">
                        <div class="col-md-12 well">
                            <img class="proyectos-img" src="/images/proyectos/camargues.png" alt="">
                            <h3 class="text-center">Carmargues</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" id="slide3">
                <div class="container">
                    <div class="col-md-4 col-xs-12 is-animated proyectos" data-img="/images/proyectos/alcaldia_presupuesto.png">
                        <div class="col-md-12 well">
                            <img class="proyectos-img" src="/images/proyectos/alcaldia_presupuesto.png" alt="">
                            <h3 class="text-center">Presupuesto</h3>

                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 is-animated proyectos" data-img="/images/proyectos/paypal_tools.png">
                        <div class="col-md-12 well">
                            <img class="proyectos-img" src="/images/proyectos/paypal_tools.png" alt="">
                            <h3 class="text-center">Comisión Paypal</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12 is-animated proyectos" data-img="/images/proyectos/quotes.png">
                        <div class="col-md-12 well">
                            <img class="proyectos-img" src="/images/proyectos/quotes.png" alt="">
                            <h3 class="text-center">Quotes</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide" id="slide4">
                <div class="container">
                    <div class="col-md-4 col-xs-12 is-animated proyectos" data-img="/images/proyectos/instruval.png">
                        <div class="col-md-12 well">
                            <img class="proyectos-img" src="/images/proyectos/instruval.png" alt="">
                            <h3 class="text-center">Instruval</h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contacto -->
{{--        <section id="section5" class="section">--}}
            <!-- pequeño -->
            {{-- <div data-aos="zoom-in" class="container hidden-sm hidden-md hidden-lg">
                <div class="well well-sm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        @lang('messages.name')</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="@lang('messages.inname')" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        @lang('messages.mail')</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span
                                                class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="@lang('messages.inmail')" required="required"></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        @lang('messages.subject')</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">@lang('messages.select')</option>
                                        <option value="service">@lang('messages.service')</option>
                                        <option value="suggestions">@lang('messages.suggestions')</option>
                                        <option value="product">@lang('messages.product')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        @lang('messages.message')</label>
                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25"
                                        required="required" placeholder="@lang('messages.message')"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    @lang('messages.sumit')
                                </button>
                            </div>
                        </div>
                </div>
            </div> --}}
            <!-- grande -->
{{--            <div data-aos="zoom-in" class="container">--}}
{{--                <div class="col-md-12 text-center hidden-xs">--}}
{{--                    <h1>@lang('messages.send')</h1>--}}
{{--                </div>--}}
{{--                <div class="jumbotron" id="jumbotronDiv">--}}
{{--                    <div class="well well-sm">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="name">--}}
{{--                                        @lang('messages.name')</label>--}}
{{--                                    <input type="text" class="form-control" id="name" name="name"--}}
{{--                                        placeholder="@lang('messages.inname')" required="required">--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="email">--}}
{{--                                        @lang('messages.mail')</label>--}}
{{--                                    <div class="input-group">--}}
{{--                                        <span class="input-group-addon"><span--}}
{{--                                                class="glyphicon glyphicon-envelope"></span>--}}
{{--                                        </span>--}}
{{--                                        <input type="email" class="form-control" name="email" id="email"--}}
{{--                                            placeholder="@lang('messages.inmail')" required="required"></div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="subject">--}}
{{--                                        @lang('messages.subject')</label>--}}
{{--                                    <select id="subject" name="subject" class="form-control" required="required">--}}
{{--                                        <option value="na" selected="">@lang('messages.select')</option>--}}
{{--                                        <option value="service">@lang('messages.service')</option>--}}
{{--                                        <option value="suggestions">@lang('messages.suggestions')</option>--}}
{{--                                        <option value="product">@lang('messages.product')</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="name">--}}
{{--                                        @lang('messages.message')</label>--}}
{{--                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25"--}}
{{--                                        required="required" placeholder="@lang('messages.message')"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <button type="button" class="btn btn-primary pull-right" id="btnContactUs">--}}
{{--                                    @lang('messages.sumit')--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </section>--}}
        <!-- Info -->
        <section id="section6" class="section">
            <div data-aos="zoom-in" class="container">
                <div class="col-md-12 text-center hidden-xs">
                    <h1>@lang('messages.additional_information')</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <i class="fa fa-envelope" aria-hidden="true" style="font-size: 4vw;color: orange;"></i>
                        <br>lerg96@gmail.com
                    </div>
                    <hr class="hidden-md hidden-lg">
                    <div class="col-md-4 text-center">
                        <i class="fa fa-phone" aria-hidden="true" style="font-size: 4vw;color: orange;"></i>
                        <br>+584246333813 
                    </div>
                    <hr class="hidden-md hidden-lg">
                    <div class="col-md-4 text-center">
                        <i class="fa fa-location-arrow" aria-hidden="true" style="font-size: 4vw;color: peru;"></i> <br>
                         <br>
                        Venezuela <br>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    &nbsp;
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                </div>
                <div class="modal-body">
                    <img src="" id="imagepreview" style="width: 100%;" >
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        $(".proyectos").on("click", function() {

            $('#imagepreview').attr('src', this.getAttribute('data-img')); // here asign the image to the modal when the user click the enlarge link
            $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
        });
    </script>

    <!-- Built with love using Web Starter Kit -->
</body>

</html>