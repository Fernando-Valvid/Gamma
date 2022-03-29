<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    


<body style="overflow-x:hidden;">
    
    <?php if(!empty($informacion)): ?>
        <?php $__currentLoopData = $informacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="https://wa.me/<?php echo e($data->whatsapp); ?>" target="_blank" class="whats" data-toggle="tooltip"><img src="https://img.icons8.com/color/96/000000/whatsapp.png"/ alt="Whatsapp Logo"></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

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
                        <?php if($menu->padre_id == 1 && $menu->status): ?>
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
            <?php if(!empty($servicio)): ?>
                <div class="logo">
                    <img src="<?php echo e(asset ('img/productos/' . $servicio->imagenLogo)); ?>" alt="<?php echo e($servicio->imagenLogoDesc); ?>">
                </div>
            <?php endif; ?> 
        </div> <!-- navbar-collapse.// -->
    </nav>
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('contact')->html();
} elseif ($_instance->childHasBeenRendered('Qxj289M')) {
    $componentId = $_instance->getRenderedChildComponentId('Qxj289M');
    $componentTag = $_instance->getRenderedChildComponentTagName('Qxj289M');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Qxj289M');
} else {
    $response = \Livewire\Livewire::mount('contact');
    $html = $response->html();
    $_instance->logRenderedChild('Qxj289M', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    

<!-- footer -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-info">
                    <a><img src="<?php echo asset('img/principales/logo.png'); ?>" alt="Logo de GePyxis"></a>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contacto</h4>
                    <?php if(!empty($informacion)): ?>
                        <?php $__currentLoopData = $informacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p>
                                <strong>Teléfono:</strong> <?php echo e($data->phone); ?> <br>
                                <strong>Correo:</strong> <?php echo e($data->email); ?> <br>
                                <strong>Dirección:</strong> <?php echo e($data->address); ?> <br>
                            </p>
                            <div class="social-links">
                                <a href="<?php echo e($data->twitter); ?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo e($data->facebook); ?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo e($data->instagram); ?>" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="<?php echo e($data->linkedin); ?>" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <p>
                            <strong>¡Próximamente!</strong>
                        </p>
                        
                    <?php endif; ?>
                </div>
                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Aviso de Privacidad</h4>
                    <a href=" <?php echo e(route('aviso-privacidad.watch')); ?> "><img src="https://talamobile.mx/wp-content/uploads/sites/5/2019/03/SecuredData@2x.png" width="90px" height="90px"></a>
                </div>
                <div class="col-lg-3 col-md-6 footer-newsletter">
                    <h4>Iniciar Sesión</h4>
                    <a href=" <?php echo e(route('login')); ?> "><img src="<?php echo e(asset('img/principales/login.png')); ?>" width="90px" height="90px"></a>
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

<?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH /homepages/8/d479879361/htdocs/clickandbuilds/GammaGEP/resources/views/layouts/app.blade.php ENDPATH**/ ?>