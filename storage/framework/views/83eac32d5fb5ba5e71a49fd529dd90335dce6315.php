<?php $__env->startSection('title',$viewmeta->get('product_meta_title')); ?>
<?php $__env->startSection('description',$viewmeta->get('product_meta_description')); ?>
<?php $__env->startSection('keywords',$viewmeta->get('product_meta_keywords')); ?>
<?php $__env->startSection('content_updated', $viewmeta->get('updated_at')); ?>
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
                        <img src="<?php echo e($servicio->imagen_producto1); ?>" alt="<?php echo e($servicio->imagenDesc); ?>">
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
                            <img src="<?php echo e($servicio->imagen_producto2); ?>" alt="<?php echo e($servicio->imagen2Desc); ?>">
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
    
    <div class="faq_area section_padding_130" id="faq">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-8 col-lg-6">
                    <!-- Section Heading-->
                    <?php
                        $preguntas = json_decode($servicio->preguntas);
                        $respuestas = json_decode($servicio->respuestas);
                    ?>
                    <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <h3><span>Preguntas </span> Frecuentes</h3>
                        <p>En este apartado encontraras las respuestas a las preguntas mas comunes de nuestros clientes.</p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- FAQ Area-->
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="accordion faq-accordian" id="faqAccordion">
                        <?php for($i = 0; $i < @count($preguntas); $i++): ?>
                            <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="card-header" id="heading<?php echo e($i); ?>">
                                    <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse<?php echo e($i); ?>"
                                    aria-expanded="true" aria-controls="collapse<?php echo e($i); ?>">
                                        <?php echo e($preguntas[$i]); ?><span class="lni-chevron-up"></span>
                                    </h6>
                                </div>
                                <div class="collapse" id="collapse<?php echo e($i); ?>"
                                    aria-labelledby="heading<?php echo e($i); ?>" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        <p><?php echo e($respuestas[$i]); ?></p>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                        
                    </div>
                    <!-- Support Button-->
                    <div class="support-button text-center d-flex align-items-center justify-content-center mt-4 wow fadeInUp" 
                        data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <i class="lni-emoji-sad"></i>
                        <p class="mb-0 px-2">¿No encuentra respuesta a su pregunta?</p>
                        <a href="#contacto"> Contáctenos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<?php echo $__env->make("layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/8/d479879361/htdocs/clickandbuilds/GammaGEP/resources/views/cliente/productos/show.blade.php ENDPATH**/ ?>