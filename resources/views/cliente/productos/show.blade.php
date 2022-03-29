@extends("layouts.app")
@section('title',$viewmeta->get('product_meta_title'))
@section('description',$viewmeta->get('product_meta_description'))
@section('keywords',$viewmeta->get('product_meta_keywords'))
@section('content_updated', $viewmeta->get('updated_at'))
@section("content")

    <div class="swiper-container principal">
        <div class="swiper-wrapper">
            @foreach($imagenesP as $imagen)
                <div class="swiper-slide"><img class="primary-img" src="{{ asset($imagen->imagen_producto) }}"></div>
            @endforeach

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
                        <h1 style="color: #FF8000; font-family:Tahoma; text-align: center">{{ $servicio->nombre }}</h1>
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
                                {!! $servicio->introduccion !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="mb-100">
                        <img src="{{$servicio->imagen_producto1}}" alt="{{$servicio->imagenDesc}}">
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
                        {!! $servicio->descripcion !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="our-services-area bg-gray section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {!! $servicio->contenido !!}
                        {{-- IMPRIMIR
                                {{$servicio}} --}}
                    </div>
                </div>
            </div>
        </section>
        <section class="our-services-area bg-gray section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {!! $servicio->diferenciadores !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="our-services-area bg-gray section-padding-100-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        {!! $servicio->carac_adi !!}
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-5">
                        <div class="mb-100">
                            <img src="{{$servicio->imagen_producto2}}" alt="{{$servicio->imagen2Desc}}">
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="alazea-service-area mb-100">
                            <!-- Section Heading -->
                            <div class="section-heading ">
                                {!! $servicio->info_adi !!}
                                
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
                    @php
                        $preguntas = json_decode($servicio->preguntas);
                        $respuestas = json_decode($servicio->respuestas);
                    @endphp
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
                        @for($i = 0; $i < @count($preguntas); $i++)
                            <div class="card border-0 wow fadeInUp" data-wow-delay="0.2s"
                                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                <div class="card-header" id="heading{{$i}}">
                                    <h6 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse{{$i}}"
                                    aria-expanded="true" aria-controls="collapse{{$i}}">
                                        {{$preguntas[$i]}}<span class="lni-chevron-up"></span>
                                    </h6>
                                </div>
                                <div class="collapse" id="collapse{{$i}}"
                                    aria-labelledby="heading{{$i}}" data-parent="#faqAccordion">
                                    <div class="card-body">
                                        <p>{{$respuestas[$i]}}</p>
                                        {{-- <p>Appland is completely creative, lightweight, clean &amp; super responsive app landing page.</p> --}}
                                    </div>
                                </div>
                            </div>
                        @endfor
                        
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
@endsection

@section('scripts')
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
@endsection
