<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="GE PYXIS, S. de R.L. de C.V">
        <meta name="copyright" content="GE PYXIS, S. de R.L. de C.V"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv=”Content-Language” content=”es”/>
        <meta name=”distribution” content=”global”/>
        <meta name="Robots" content="all"/>
        <link rel="canonical" href="{{url()->current()}}"/>
        <meta name="description" content="@yield('description')">
        <meta name="keywords" content="@yield('keywords')">
        {{-- Fecha en la que se creo la pagina y fecha de ultima actualizacion --}}
        <meta name="content_origin"  content="2021-04-02">
        <meta name="content_updated" content="@yield('content_updated')">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <!-- Title -->
        @hasSection('title')
            <title>Gepixys | @yield('title')</title>
        @endif
        @sectionMissing('title')
            <title>Gepixys</title>
        @endif
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
        <!-- Libraries CSS Files -->
        <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('lib/lightbox/css/lightbox.min.css') }}">

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- Apple touch icon -->
        <link rel="apple-touch-icon" href="{{ asset('') }}">


        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <style>
            @media (min-width: 992px){
                .dropdown-menu .dropdown-toggle:after{
                    border-top: .3em solid transparent;
                    border-right: 0;
                    border-bottom: .3em solid transparent;
                    border-left: .3em solid;
                }
                .dropdown-menu .dropdown-menu{
                    margin-left:0; margin-right: 0;
                }
                .dropdown-menu li{
                    position: relative;
                }
                .nav-item .submenu{
                    display: none;
                    position: absolute;
                    left:100%; top:-7px;
                }
                .nav-item .submenu-left{
                    right:100%; left:auto;
                }
                .dropdown-menu > li:hover{ background-color: #f1f1f1 }
                .dropdown-menu > li:hover > .submenu{
                    display: block;
                }
            }

        </style>

        @livewireStyles
    </head>