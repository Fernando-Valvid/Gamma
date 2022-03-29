<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('lib/bootstrap/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('lib/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/animate/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/ionicons/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('lib/lightbox/css/lightbox.min.css')); ?>">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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
</head>
<body>

<a href="https://wa.me/525522793490" target="_blank" class="whats" data-toggle="tooltip"><img src="https://img.icons8.com/color/96/000000/whatsapp.png"/ alt="Whatsapp Logo"></a>

<div id="app">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/principales/logo.png')); ?>" style="width: 60px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">

            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="<?php echo e(url('/')); ?>">Inicio</a> </li>



                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($menu->padre_id == null && $menu->status): ?>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">  <?php echo e($menu->nombre); ?>  </a>



                            <ul class="dropdown-menu">
                                <?php $__currentLoopData = $menu->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($producto->status): ?>
                                    <li><a class="dropdown-item" href=" <?php echo e(url($producto->padre->slug.'/'.$producto->slug)); ?> "> <?php echo e($producto->nombre); ?> </a>

                                            <ul class="submenu dropdown-menu">
                                                <?php $__currentLoopData = $producto->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($categoria->status): ?>
                                                    <li><a class="dropdown-item" href="<?php echo e(url($producto->slug.'/'.$categoria->slug)); ?>"> <?php echo e($categoria->nombre); ?> </a>
                                                        <ul class="submenu dropdown-menu">
                                                            <?php $__currentLoopData = $categoria->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($sub_categoria->status): ?>
                                                                <li><a class="dropdown-item" href="<?php echo e(url($producto->slug."/".$sub_categoria->slug)); ?>"> <?php echo e($sub_categoria->nombre); ?> </a></li>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                    </li>
                                                    <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </li>
                                            </ul>

                                    </li>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                        </li>
                    <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pyxis
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(url('/#about')); ?>">¿Quienes Somos?</a>
                        <a class="dropdown-item" href="<?php echo e(url('/#clientes')); ?>">Clientes</a>
                        <a class="dropdown-item" href="<?php echo e(url('/#socios')); ?>">Socios Estrategicos</a>
                        <a class="dropdown-item" href="<?php echo e(url('#contacto')); ?>">Coctacto</a>
                    </div>
                </li>

            </ul>
        </div>

        </div> <!-- navbar-collapse.// -->
    </nav>


    <main>

        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>

<!-- footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <a><img src="<?php echo asset('img/principales/logo.png'); ?>" alt=""></a>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contacto</h4>
                    <p><!-- aqui podemos poner la direccion -->
                        <strong>Teléfono:</strong> +52 (55) 5112 7794<br>
                        <strong>Correo:</strong> informacion@gepyxis.mx<br>
                    </p>

                    <div class="social-links">
                        <a href="https://twitter.com/gepyxis" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/Ge-Pyxis-313151499120781" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/gepyxis/" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://mx.linkedin.com/company/gpy22012208" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Aviso de Privacidad</h4>
                    <a href=" <?php echo e(route('aviso')); ?> "><img src="https://talamobile.mx/wp-content/uploads/sites/5/2019/03/SecuredData@2x.png" width="45%" height="60%"></a>
                </div>

                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Iniciar Sesión</h4>
                    <a href=" <?php echo e(route('login')); ?> "><img src="<?php echo e(asset('img/principales/login.png')); ?>" width="40%" height="55%"></a>
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

<?php echo $__env->yieldContent('scripts'); ?>


</body>
</html>
<?php /**PATH C:\xampp\htdocs\pyxis\resources\views/layouts/app.blade.php ENDPATH**/ ?>