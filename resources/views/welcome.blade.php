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
    <script src="{{ asset('js/app.js') }}" ></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <style>
        html,
        body {
            background-color: #fff;
            color: #000000;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
            font-size: 16px;

        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            position: relative;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .header {
            bottom: 0;
            height: 5rem;
            left: 0;
            margin: 0 auto;
            max-width: 1920px;
            padding-top: 20px;
            position: relative;
            right: 0;
            top: 0;
            transition: background-color .5s;
            width: 100%;
            z-index: 10;
        }

        .imagen-fondo {
            overflow: hidden;
            position: absolute;
            z-index: 0;
            top: -70px;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .dimension {
            width: 1903px;
            height: 827px;
        }

        .svg-icon {
            width: 167px;
            height: 45px;
            z-index: 1;
            padding: .5rem;
            fill: #e50914;
        }

        .titulo {
            max-width: 950px;
            color: #ffffff;
            margin: 0px auto;
            position: relative;
            padding: 75px 0;

        }
        /* 
        h1,
        h2,
        h3 {
            font-size: 4rem;
        } */

        .btn {
            text-decoration: none;
            color: #ffffff;
            background-color: #e50914;
            padding: 7px 13px;
            border-radius: 3px;
            font-weight: 600;
        }

        .transparencia {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, .4);
            background-image: linear-gradient(0deg, rgba(0, 0, 0, .8) 0, transparent 60%, rgba(0, 0, 0, .8));
        }

        .cabecera {
            display: flex;
            justify-content: center;
            align-items: center;
            top: 0;
            position: relative;
            right: 12px;
            gap: 26px;
            margin: 0 3.5rem;
        }

        .logo {
            margin-right: auto;
        }

        .idioma select {
            background-color: transparent;
            padding: 7px 12px;
            color: #ffffff;
        }

        .background-img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .img {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 390px;
        }

        .primerTitulo {
            font-size: 4rem;
            margin: 0 auto;
            line-height: 1.1;
        }

        @media only screen and (min-width: 1450px) {
            .primerTitulo {
                max-width: 800px;
            }
        }

        @media only screen and (min-width: 1450px) {
            .imagen-fondo {
                top: -100px;
            }
        }

        @media only screen and (min-width: 1450px) {
            .content {
                padding: 70px 45px;
            }
        }

        @media screen and (min-width: 740px) {
            h1 {
                font-size: 38px;
            }
        }

        .button-form{
            border: none;
            padding: 27px 69.7px;
            cursor: pointer;
            border-radius: 0;
        }
        .button-form:hover{
            background-color: #e50911;
        }

        .input-form{
            padding: 25px 190px;
        }

        .tercerTitulo{
            /* font-weight: 400; */
            margin: 0 auto;
            padding: 0 5%;
        }

        @media only screen and (min-width: 1450px){
            .tercerTitulo{
                font-size: 1.2rem;
                padding-bottom: 20px;
            }
            .form{
                max-width: 950px;
                padding-top: .85rem;
            }
        }




    </style>
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
                        <option value="2">English</option>
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
                <form class="form" action="" method="POST">
                    <h3 class="tercerTitulo">¿Quieres ver algo ya? Escribe tu dirección de correo para crear una suscripción a Netflix o reactivarla.</h3>
                   @csrf
                    <!-- falta la nomenclatura para poder enviar formulario -->
                    <div class="row">
                        <div class="col-md-12 input-group">
                            <label class="form-group">dirección de correo</label>
                            <input class="input-form" type="text" class="form-group">
                            <button class="btn button-form" type="submit" name="registrar">Empezar ></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>