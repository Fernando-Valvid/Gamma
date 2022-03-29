

    <!-- Swiper -->
    <div class="swiper-container principal">
        <div class="swiper-wrapper">
            @foreach($imagenes as $imagen)
                <div class="swiper-slide"><img class="primary-img" src="{{ asset($imagen->imagen_producto) }}"></div>
            @endforeach
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


