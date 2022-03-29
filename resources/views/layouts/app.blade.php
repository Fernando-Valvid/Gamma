<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.header')    


<body style="overflow-x:hidden;">
    
    @if(!empty($informacion))
        @foreach($informacion as $data)
            <a href="https://wa.me/{{$data->whatsapp}}" target="_blank" class="whats" data-toggle="tooltip"><img src="https://img.icons8.com/color/96/000000/whatsapp.png"/ alt="Whatsapp Logo"></a>
        @endforeach
    @endif

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/principales/logo.png')}}" style="width: 60px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav">

                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" href="{{url('/')}}">Inicio</a> </li>

                    @foreach($menus as $menu)
                        @if($menu->padre_id == 1 && $menu->status)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  {{$menu->nombre}}  </a>
                                <ul class="dropdown-menu">
                                    @foreach($menu->menus as $producto)
                                        @if($producto->status)
                                        <li><a class="dropdown-item" href=" {{url($producto->padre->slug.'/'.$producto->slug)}} "> {{$producto->nombre}} </a>
                                                <ul class="submenu dropdown-menu">
                                                    @foreach($producto->menus as $categoria)
                                                        @if($categoria->status)
                                                        <li><a class="dropdown-item" href="{{url($producto->slug.'/'.$categoria->slug)}}"> {{$categoria->nombre}} </a>
                                                            <ul class="submenu dropdown-menu">
                                                                @foreach($categoria->menus as $sub_categoria)
                                                                    @if($sub_categoria->status)
                                                                    <li><a class="dropdown-item" href="{{url($producto->slug."/".$sub_categoria->slug)}}"> {{$sub_categoria->nombre}} </a></li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @endif
                                                        @endforeach
                                                        </li>
                                                </ul>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                            @endforeach
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pyxis
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/#about')}}">¿Quienes Somos?</a>
                            <a class="dropdown-item" href="{{url('/#clientes')}}">Clientes</a>
                            <a class="dropdown-item" href="{{url('/#socios')}}">Socios Estrategicos</a>
                            <a class="dropdown-item" href="{{url('#contacto')}}">Coctacto</a>
                        </div>
                    </li>
                </ul>
            </div>
            @if(!empty($servicio))
                <div class="logo">
                    <img src="{{ asset ('img/productos/' . $servicio->imagenLogo)}}" alt="{{$servicio->imagenLogoDesc}}">
                </div>
            @endif 
        </div> <!-- navbar-collapse.// -->
    </nav>
    <main>
        @yield('content')
    </main>
</div>
    
    @livewire('contact')
    

<!-- footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-info">
                    <a><img src="{!! asset('img/principales/logo.png') !!}" alt="Logo de GePyxis"></a>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contacto</h4>
                    @if(!empty($informacion))
                        @foreach($informacion as $data)
                            <p>
                                <strong>Teléfono:</strong> {{$data->phone}} <br>
                                <strong>Correo:</strong> {{$data->email}} <br>
                                <strong>Dirección:</strong> {{$data->address}} <br>
                            </p>
                            <div class="social-links">
                                <a href="{{$data->twitter}}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="{{$data->facebook}}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="{{$data->instagram}}" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="{{$data->linkedin}}" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        @endforeach
                    @else
                        <p>
                            <strong>¡Próximamente!</strong>
                        </p>
                        
                    @endif
                </div>
                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Aviso de Privacidad</h4>
                    <a href=" {{route('aviso-privacidad.watch')}} "><img src="https://talamobile.mx/wp-content/uploads/sites/5/2019/03/SecuredData@2x.png" width="90px" height="90px"></a>
                </div>
                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Iniciar Sesión</h4>
                    <a href=" {{route('login')}} "><img src="{{asset('img/principales/login.png')}}" width="90px" height="90px"></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright 2021 <strong>Ge Pyxis</strong>. Derechos Reservados
        </div>
    </div>
</footer>
<!-- #footer -->

<script defer>
    // Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
        $('.dropdown-menu a').click(function(e){
            e.preventDefault();
            if($(this).next('.submenu').length){
                $(this).next('.submenu').toggle();
            }
            $('.dropdown').on('hide.bs.dropdown', function () {
                $(this).find('.submenu').hide();
            })
        });
    }
</script>

@yield('scripts')

@livewireScripts
</body>
</html>
