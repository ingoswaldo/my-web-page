<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@lang('website.seo.keywords')">
    <meta name="description" content="@lang('website.seo.description')">

    <!-- TITLE OF SITE -->
    <title>@lang('website.seo.title')</title>

    <!-- favicon -->
    <link id="favicon" rel="icon" type="image/png" href="{{ asset('images/favicon.ico') }}">

    <!-- Google Fonts-->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114537804-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-114537804-2');
    </script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="small_menu">
    <div id="page" class="site">
        <!--Start Preloader-->
        <div class="page-loader startLoad">
            <div class="loader startLoad"></div>
        </div>
        <!--End Preloader-->

        <div id="splitlayout" class="splitlayout close-right">
            <aside class="social">
                <ul>
                    <li><a href="{{ url('/en') }}" data-toggle="tooltip"><span class="flag-icon flag-icon-us fa-2x"></span></a></li>
                    <li><a href="{{ url('/es') }}"><span class="flag-icon flag-icon-es fa-2x"></span></a></li>
                </ul>
            </aside>


            @yield('content')

        </div><!--.splitlayout-->
    </div><!-- #page -->

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCABUipchxBy5ubGg0ajToD30sX9KhcCBQ"></script>

</body>
</html>
