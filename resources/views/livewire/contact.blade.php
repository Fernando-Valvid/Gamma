<div>
    <section id="contacto" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contáctanos</h3>
            </div>

            <div class="row contact-info">
                {{-- @if(!$informacion->isEmpty()) --}}
                    @forelse($informacion as $data)
                        <div class="col-md-4">
                                <div class="contact-phone">
                                    <i class="ion-ios-telephone-outline"></i>
                                    <h3>Teléfono</h3>
                                    <p><a href="tel:+52 (55) 5112 7794"> {{$data->phone}} </a></p>
                                </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3>Dirección</h3>
                                <p><a href=""> {{$data->address}} </a></p>
                            </div>
                        </div>
        
                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>Correo</h3>
                                
                                <p><a href="mailto:{{$data->mail}}"> {{$data->email}} </a></p>
                            </div>
                        </div>
                    @empty   
                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="ion-ios-telephone-outline"></i>
                                <h3>Teléfono</h3>
                                <p><a>¡Próximamente!</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3>Dirección</h3>
                                <p><a>¡Próximamente!</a></p>
                            </div>
                        </div>
        
                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>Correo</h3>
                                <p><a>¡Próximamente!</a></p>
                            </div>
                        </div>
                    @endforelse
                {{-- @endif --}}
            </div>

            <div class="form">
                <div id="errormessage"></div>
                <form action="{{route('contactanos.store')}}" method="POST" role="form" class="contactForm">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre de Contacto" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5"  data-msg="Please write something for us" placeholder="Mensaje y/o Requerimiento" required></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form>

                @if(session('info'))
                    <script>
                        alert("{{session('info')}}");
                    </script>
                @endif
            </div>
        </div>
    </section>
</div>
