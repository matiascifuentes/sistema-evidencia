<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!--footer-->

    <footer>
        <div class="footer-content">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-3">
                            <div class="logo">
                                <img src="http://portal.ucm.cl//content/uploads/2019/01/logo-footer_nuevo.png" alt="">
                            </div>
                            <nav class="social">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/ucatolicadelmaule/" title="Facebook - Universidad Católica del Maule" target="_blank" class="facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/ucatolicamaule" title="Twitter - @ucatolicamaule" target="_blank" class="twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCI6mMQ5izHQa9MvWUAUV_Eg" title="YouTube - UCatolica Maule" target="_blank" class="youtube">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/ucatolicamaule/" title="Instagram - @ucatolicamaule" target="_blank" class="instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/edu/universidad-cat%C3%B3lica-del-maule-10952" title="Linkedin - Universidad Católica del Maule" target="_blank" class="linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.flickr.com/photos/167655867@N08/albums" title="Flickr - Universidad Católica del Maule" target="_blank" class="flickr">
                                            <i class="fa fa-flickr"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="trademark">
                                <p>
                                    <a href="http://portal.ucm.cl/politicas-de-privacidad">Políticas de privacidad</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                    <a href="http://portal.ucm.cl/mapa-de-sitio">Mapa del Sitio</a></p><p><!--- <a href="http://web2.ucm.cl/manual-uso-la-marca" target="_blank">Manual de uso y marca</a-->
                                </p>
                            </div>
                        </div>

                        <div class="col col-md-3">
                             <div class="listas">
                                <ul>
                                    <li></li>
                                    <li>Campus San Miguel, Avenida San Miguel 3605, Talca. <br>
                                       Teléfono: +56712203100</li>
                                    <li></li>
                                    <li>Campus Nuestra Señora del Carmen, Carmen 684, Curicó. <br>Teléfono:+56752203100</li>
                                    <li></li>
                                    <li>Campus San Isidro - km. 6 Los Niches, Curicó. <br>Teléfono:+56752203583</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col col-md-3">
                            
                        </div>

                        <div class="col col-md-3">
                            <div class="buttonss">
                                <a href="http://portal.ucm.cl/contacto" class="" target="">Contáctanos</a>
                            </div>
                            <div class="buttonss">
                                <a href="http://portal.ucm.cl/trabaja-con-nosotros" class="" target="">Trabaja en la UCM</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="footer-bottom">
                <div class="links">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col col-sm-2">
                                <a href="" target="" title="Logo 5 Años acreditada por gestión institucional, Docencia de pregrado y vinculación con el medio desde el 2015 al 2020">
                                    <img src="http://portal.ucm.cl//content/uploads/2016/10/logo-1.png" alt="Logo 5 Años acreditada por gestión institucional, Docencia de pregrado y vinculación con el medio desde el 2015 al 2020">
                                </a>
                            </div>
                            <div class="col col-sm-2">
                                <a href="http://www.consejoderectores.cl" target="_blank" title="Logo Consejo de rectores de las universidades chilenas">
                                    <img src="http://portal.ucm.cl//content/uploads/2016/10/logo-4.png" alt="Logo Consejo de rectores de las universidades chilenas">
                                </a>
                            </div>
                            <div class="col col-sm-2">
                                <a href="http://redg9.cl" target="_blank" title="Logo universidades públicas no estatales">
                                    <img src="http://portal.ucm.cl//content/uploads/2016/10/logo-3.png" alt="Logo universidades públicas no estatales">
                                </a>
                            </div>
                            <div class="col col-sm-2">
                                <a href="http://www.auregionales.cl" target="_blank" title="">
                                    <img src="http://portal.ucm.cl//content/uploads/2016/10/logo-2.png" alt="">
                                </a>
                            </div>
                            <div class="col col-sm-2">
                                <a href="https://www.questionpro.com/a/showEntry.do?uID=2595" target="_blank" title="Aplicación para crear encuestas On Line">
                                    <img src="http://portal.ucm.cl//content/uploads/2017/12/question_pro.png" alt="Aplicación para crear encuestas On Line">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
