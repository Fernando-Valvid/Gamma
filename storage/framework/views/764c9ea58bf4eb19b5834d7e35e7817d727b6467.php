<?php $__env->startSection('title',$viewmeta->product_meta_title); ?>
<?php $__env->startSection('description',$viewmeta->product_meta_description); ?>
<?php $__env->startSection('keywords',$viewmeta->product_meta_keywords); ?>
<?php $__env->startSection('content_updated', $viewmeta->updated_at); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cliente.includes.carrusel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="bg-warning col-12" id="about">
        <div class="container">
            <header class="section-header">
                <h3>¿Quienes Somos?</h3>
            </header>
            <section class="alazea-portfolio-area portfolio-page section-padding-0-100 bg-gray" >
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Section Portfolio -->
                            <h2 style="color:#FF8000; font-family:Tahoma; text-align:center; size: 25px;">Nuestras habilidades:</h2>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="alazea-portfolio-filter2">
                                <div class="portfolio-filter2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row alazea-portfolio2">
                        <!-- Single Portfolio Area -->
                        <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item2 design home-design">
                            <div class="portfolio-thumbnail2 bg-img"
                            style="background-image: url('img/principales/fondo2.jpg');opacity: 0.9; filter: alpha(opacity=30); border-style: inset;">
                                <div>
                                    <a>
                                        <div class="port-hover-text" style="text-align:center;">
                                            <br><br><br>
                                            <h3  style="font-family: Tahoma; color:#FFffff;">VANGUARDIA TECNOLÓGICA</h3>
                                            <p style="font-family: Tahoma; color:black;">Nos ocupamos de integrar en nuestras soluciones la Tecnología más actual e Internacional.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item2 design home-design">
                            <div class="portfolio-thumbnail2 bg-img"
                            style="background-image: url('img/principales/fondo2.jpg');opacity: 0.9; filter: alpha(opacity=30); border-style: inset;">
                                <div>
                                    <a>
                                        <div class="port-hover-text" style="text-align:center;">
                                            <br><br><br>
                                            <h3 style="font-family: Tahoma; color:#FFffff;">PROCESOS DE NEGOCIOS</h3>
                                            <p style="font-family: Tahoma; color:black;">Analizamos y diagnosticamos los<br>procesos clave de los negocios ofreciendo
                                                las alternativas de  <br>solución adecuadas  <br>para cada empresa.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item2 design home-design">
                            <div class="portfolio-thumbnail2 bg-img"
                            style="background-image: url('img/principales/fondo2.jpg');opacity: 0.9; filter: alpha(opacity=30); border-style: inset;">
                                <div>
                                    <a>
                                        <div class="port-hover-text" style="text-align:center;">
                                            <br><br><br>
                                            <h3 style="font-family: Tahoma; color:#FFffff">GESTIÓN DE PROYECTOS</h3>
                                            <p style="font-family: Tahoma; color:black;">Ayudamos a nuestros clientes en la administración de los proyectos <br>asignando ya sea bajo nuestra<br>
                                                responsabilidad o asignando personal <br>(PMO).</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 single_portfolio_item2 design home-design">
                            <div class="portfolio-thumbnail2 bg-img"
                            style="background-image: url('img/principales/fondo2.jpg');opacity: 0.9; filter: alpha(opacity=30); border-style: inset; ">
                                <div>
                                    <a>
                                        <div class="port-hover-text" style="text-align:center;">
                                            <br><br><br>
                                            <h3 style="font-family: Tahoma; color:#FFffff;">ADMINISTRACIÓN DEL CAMBIO</h3>
                                            <p style="font-family: Tahoma; color:black;">Ayudamos a minimizar la resistencia al <br>cambio y hacer más rápida la <br>aceptación por parte de los usuarios.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <header class="section-header wow fadeInUp">
            </header>
            <div class="row">
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                    <h4 class="title"><a href="">Misión</a></h4>
                    <p class="description">Fortalecer el desarrollo y crecimiento de nuestros clientes a través de proveer soluciones focalizadas en áreas claves del negocio, en los procesos, en las personas y en los clientes.</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                    <h4 class="title"><a href="">Visión</a></h4>
                    <p class="description">Proveer a empresa soluciones con tecnología avanzada que permita minimizar riesgos y costos e incrementar la rentabilidad para generar mayores beneficios económicos, sociales y familiares a todos sus integrantes, procurando el cuidado del medio ambiente.</p>
                </div>
                <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                    <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
                    <h4 class="title"><a href="">Valores</a></h4>
                    <p class="description">Integridad: Que todo profesionista posee al ejercer sus funciones en todo ámbito. Confianza: En nuestra organización para ofrecer a nuestros clientes. Pasión: Que incrementa al hacer lo que amamos.</p>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
      Clientes Section
    ============================-->
    <section id="clientes" class="wow fadeInUp">
        <div class="container">
            <header class="section-header">
                <h3>Clientes</h3>
                <h2 style="font-size: 15px; text-align: center;" >Todas las imágenes y logotipos son propiedad de sus respectivos autores.</h2>
            </header>

            <!-- Swiper -->
            <div class="swiper-container secundary">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/azteca.jpg')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/central.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/ecisa.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/exakta.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/hsbc.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/jenner.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/jm.jpg')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/lapi.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/liverpool.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/pemex.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/pskadsa.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/selecciones.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/tabasco.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/clientes/telmex.png')); ?>"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section><!-- #clientes -->
    <!--==========================
      Socios Section
    ============================-->
    <section id="socios" class="wow fadeInUp">
        <div class="container">
            <header class="section-header">
                <h3>SOCIOS ESTRATEGICOS</h3>
                <h2 style="font-size: 15px; text-align: center;" >Todas las imágenes y logotipos son propiedad de sus respectivos autores.</h2>
            </header>
            <!-- Swiper -->
            <div class="swiper-container secundary">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/axis.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/castelec.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/dynamics.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/emc.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/epicor.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/hp.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/ibm.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/intelisis.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/kernel.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/mecalux.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/microsoft.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/motorola.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/negocio.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/oracle.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/palmersa.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/redhat.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/sap.jpg')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/soluciones.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/targit.png')); ?>"></div>
                    <div class="swiper-slide"><img src="<?php echo e(asset('img/socios/utn.png')); ?>"></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section><!-- #socios -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.secundary', {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/8/d479879361/htdocs/clickandbuilds/GammaGEP/resources/views/welcome.blade.php ENDPATH**/ ?>