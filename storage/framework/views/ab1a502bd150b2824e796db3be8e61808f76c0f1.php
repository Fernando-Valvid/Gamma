

    <!-- Swiper -->
    <div class="swiper-container principal">
        <div class="swiper-wrapper">
            <?php $__currentLoopData = $imagenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $imagen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide"><img class="primary-img" src="<?php echo e(asset($imagen->imagen_producto)); ?>"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>

    <!-- Initialize Swiper -->
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
            // mousewheel: true,
            keyboard: true,
        });
    </script>


<?php /**PATH /homepages/8/d479879361/htdocs/clickandbuilds/GammaGEP/resources/views/cliente/includes/carrusel.blade.php ENDPATH**/ ?>