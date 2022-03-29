<?php $__env->startSection("content"); ?>
    <div class="swiper-container principal">
        <div class="swiper-wrapper">
            <?php $__currentLoopData = $imagenesP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide"><img class="primary-img" src="<?php echo e(asset($imagen->imagen_producto)); ?>"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <section id="products" class="our-services-area bg-gray section-padding-100-0 text-justify">
        <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading ">
                        <h1 style="color: #FF8000; font-family:Tahoma; text-align: center"><?php echo e($servicio->nombre); ?></h1>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">
                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Content -->
                            <div class="service-content">
                                <?php echo $servicio->introduccion; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="mb-100">
                        <img src="<?php echo e($servicio->imagen_producto1); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
            <br>
            <br>
        </section>
        <section class="our-services-area bg-gray section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php echo $servicio->descripcion; ?>

                    </div>
                </div>
            </div>
        </section>
        <section class="our-services-area bg-gray section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php echo $servicio->contenido; ?>

                    </div>
                </div>
            </div>
        </section>
        <section class="our-services-area bg-gray section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php echo $servicio->diferenciadores; ?>

                    </div>
                </div>
            </div>
        </section>
        <section class="our-services-area bg-gray section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php echo $servicio->carac_adi; ?>

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-5">
                        <div class="mb-100">
                            <img src="<?php echo e($servicio->imagen_producto2); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="alazea-service-area mb-100">
                            <!-- Section Heading -->
                            <div class="section-heading ">
                                <?php echo $servicio->info_adi; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        var swiper = new Swiper('.principal', {
            cssMode: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination'
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pyxis\resources\views/cliente/productos/show.blade.php ENDPATH**/ ?>