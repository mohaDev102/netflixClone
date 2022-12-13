<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Netflix</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <!-- <script src="{{ asset('js/app.js') }}" ></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    
</head>

<body>
    <div class="">
        <div class="header">
            <div class="cabecera">
                <span class="logo">
                    <svg viewBox="0 0 111 30" data-uia="netflix-logo" class="svg-icon svg-icon-netflix-logo" aria-hidden="true" focusable="false">
                        <g id="netflix-logo">
                            <path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2498828 C43.7810479,26.2498828 42.1876465,26.2498828 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z" id="Fill-14"></path>
                        </g>
                    </svg>
                </span>
                <div class="idioma">
                    <select name="lang">
                        <option value="1">Español</option>
                        <option value="2"><a href="{{ __('traduccion.ingles') }}">English</a></option>
                    </select>
                </div>
                <a class="btn" href="/login">Iniciar sesión</a>
            </div>
        </div>
        <div class="content">
            <div class="imagen-fondo">
                <div class="img" style="height: 827.8px;">
                    <img class="concord-img vlv-creative background-img" src="https://assets.nflxext.com/ffe/siteui/vlv3/79fe83d4-7ef6-4181-9439-46db72599559/33195bfc-7f65-4308-8869-677efc451cad/ES-es-20221017-popsignuptwoweeks-perspective_alpha_website_small.jpg" srcset="https://assets.nflxext.com/ffe/siteui/vlv3/79fe83d4-7ef6-4181-9439-46db72599559/33195bfc-7f65-4308-8869-677efc451cad/ES-es-20221017-popsignuptwoweeks-perspective_alpha_website_small.jpg 1000w, https://assets.nflxext.com/ffe/siteui/vlv3/79fe83d4-7ef6-4181-9439-46db72599559/33195bfc-7f65-4308-8869-677efc451cad/ES-es-20221017-popsignuptwoweeks-perspective_alpha_website_medium.jpg 1500w, https://assets.nflxext.com/ffe/siteui/vlv3/79fe83d4-7ef6-4181-9439-46db72599559/33195bfc-7f65-4308-8869-677efc451cad/ES-es-20221017-popsignuptwoweeks-perspective_alpha_website_large.jpg 1800w" alt="">
                    <div class="transparencia"></div>
                </div>
            </div>
            <div class="titulo">
                <h1 class="primerTitulo">Todas las películas y series que desees, y mucho más.</h1>
                <h2 class="segundoTitulo">Disfruta donde quieras. Cancela cuando quieras.</h2>
                @include('layouts.registro')
            </div>
        </div>
        <div class="textoImagen">
            <div class="row justify-content-center align-items-center primerBloque">
                <div class="col-md-6">
                   <h2 class="tituloSecond">{{ __('traduccion.primertitulo') }}</h2>
                   <p class="p1">Smart TV, Playstation, Xbox, Chromecast, Apple TV, reproductores Blu-ray y muchos más.</p>
                </div>
                <div class="col-md-6 dimencion">
                    <div class="imgVideo">
                        <img class="tv1" loading="lazy" aria-label="imagen tv de fondo" src="{{ asset('assets/img/tv.png')}}" alt="{{asset('assets/img/tv.png')}}" />
                        <div class="videoTV">
                            <video autoplay playsinline muted loop>
                                <source src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-tv-0819.m4v" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="imagenTexto">
            <div class="row justify-content-center align-items-center primerBloque textFirst">
                <div class="col-md-6">
                    <div class="imagen">
                        <img src="{{ asset('assets/img/imagen2.jpg')}}" loading="lazy" alt="imagen stranger things" />
                        <div class="animacion">
                            <img class="mx-2 serie" src="{{ asset('assets/img/serie.png') }}" loading="lazy" alt="imagen serie stranger things" />
                            <div class="texto">
                                <h6>Stranger Things</h6>
                                <p style="color: blue;">Descargándose...</p>
                            </div>
                            <div class="animacion-img me-4">
                                <img src="{{ asset('assets/img/animacion.gif') }}" alt="animacion circulo"  />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="h2">Descárgate tus series favoritas para verlas sin conexión.</h2>
                    <p class="p2">Guarda tus títulos favoritos fácilmente para que siempre tengas algo para ver.</p>
                </div>
            </div>
        </div>
        <div class="textoImagen">
            <div class="row align-items-center primerBloque">
                <div class="col-md-6">
                    <h2 class="tituloSecond">Disfruta en todas partes.</h2>
                    <p class="p2">Reproduce en streaming todas las películas y series en tu móvil, tableta, ordenador y TV sin pagar más.</p>
                </div>
                <div class="col-md-6">
                    <div class="videoImg">
                        <img class="tv1" src="{{ asset('assets/img/tercera.png') }}" alt="imagen 3 stranger things" />
                        <div class="video">
                            <video class="videoAnimado" autoplay playsinline muted loop>
                                <source src="https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/video-devices.m4v" type="video/mp4">
                            </video>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="imagenTexto">
            <div class="row align-items-center primerBloque textFirst">
                <div class="col-md-6">
                    <div class="imagenInfantil">
                        <img src="{{ asset('assets/img/infantil.png') }}" alt="infantil" />
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="tituloSecond">Crea perfiles infantiles.</h2>
                    <p class="p3">Deja que los niños vivan aventuras con sus personajes favoritos en un espacio diseñado exclusivamente para ellos, gratis con tu suscripción.</p>
                </div>
            </div>
        </div>
        <div class="faqs">
            <div class="text">
                <div class="row justify-content-center align-items-center text-center primerBloque">
                    <h2 class="tituloSecond">Preguntas frecuentes</h2>
                    <ul class="faq mt-4">
                        <li class="list">
                            <button class="button">
                                ¿Qué es Netflix?
                            </button>
                            <div class="descripcion oculto">
                               <p class="p-descripcion"> Netflix es un servicio de streaming que ofrece una amplia variedad de series,
                                películas, títulos de anime, documentales y otros contenidos premiados en miles de dispositivos conectados a internet.</p>
                               <p class="p-descripcion"> Puedes ver todo el contenido que quieras, cuando quieras y sin un solo anuncio por una tarifa mensual reducida. 
                                ¡Siempre hay algo nuevo que descubrir, y cada semana se añaden nuevas series y películas! </p>
                            </div>
                        </li>
                        <li class="list">
                            <button class="button">
                                ¿Cuánto cuesta Netflix?
                            </button>
                            <div class="descripcion oculto">
                               <p class="p-descripcion"> Disfruta de Netflix en tu smartphone, tableta, Smart TV, 
                                ordenador o dispositivo de streaming, todo por una tarifa
                                mensual fija. Planes desde 7,99 € a 17,99 € al mes. Sin cargos
                                adicionales ni contratos. </p>
                            </div>
                        </li>
                    </ul>
                    @include('layouts.registro')
                </div>
               
            </div>
           
        </div>
       
        <div class="footer">
            <footer>
                <h5 class="mb-3">
                    ¿Preguntas? Lama al 900 822 376
                </h5>
                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-footer">
                            <li><a href="#" >Preguntas frecuentes</a></li>
                            <li><a href="#" >Inversores</a></li>
                            <li><a href="#" >Formas de ver</a></li>
                            <li><a href="#" >Información corporativa</a></li>
                            <li><a href="#" >Avisos legales</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-footer">
                            <li><a href="#" >Centro de ayuda</a></li>
                            <li><a href="#" >Empleo</a></li>
                            <li><a href="#" >Términos de uso</a></li>
                            <li><a href="#" >Contáctanos</a></li>
                            <li><a href="#" >Solo en Netflix</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-footer">
                            <li><a href="#" >Cuenta</a></li>
                            <li><a href="#" >Canjear tarjetas regalo</a></li>
                            <li><a href="#" >Privacidad</a></li>
                            <li><a href="#" >Prueba de velocidad</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-footer"> 
                            <li><a href="#" >Zona de prensa</a></li>
                            <li><a href="#" >Comprar tarjetas regalo</a></li>
                            <li><a href="#" >Preferencias de cookies</a></li>
                            <li><a href="#" >Garantía legal</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
     
    </div>
</body>
<script type="text/javascript">

    $('.button').click(function(){

        elementoTexto = $(this).next();
        if($(elementoTexto).hasClass('oculto') &&  !$(elementoTexto).hasClass('activo')){
                $('.descripcion').removeClass('activo');
                $('.descripcion').addClass('oculto');
                $(elementoTexto).removeClass('oculto');
                $(elementoTexto).addClass('activo');
        }else{
                $(elementoTexto).addClass('oculto');
                $(elementoTexto).removeClass('activo');
        }
    });

</script>
</html>