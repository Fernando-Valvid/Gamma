{{-- Formulario que permite modificar la informacion de contacto que se le muestra al usuario--}}
@extends('admin.layout')
@section('title')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Modificar Información de contacto</h1>
        </div>
        {{-- <div class="col-6 text-right">
            <a class="btn btn-primary" href="{{url('admin/actualizar-informacion/'.$id=1)}}" id="create-producto"> <i class="fas fa-plus"></i> Editar información</a>
        </div> --}}
    </div>
@endsection
@section('content')

    @if (session('guardado'))
        <div class="alert alert-success col-12" role="alert">
            <i class="fas fa-check"></i> {{ session('guardado') }}
        </div>
    @elseif(session('fallo'))
        <div class="alert alert-danger col-12" role="alert">
            <i class="fas fa-times"></i> {{ session('fallo') }}
        </div>
    @elseif($datos->isEmpty())

        <div class="alert alert-warning col-12" role="alert">
            <i class="fas fa-info-circle"></i> Sin información disponible
        </div>
    @endif

    {{-- Alerta de que no existe información almacenada --}}
    {{-- @if($datos->isEmpty())
    @endif --}}
            <div class="card col-12 p-0">
                <!-- /.card-header -->
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route("informacion.store")}}" method="post">
                        @csrf
                        <!-- /.En caso de que no haya datos registrados -->
                        @if($datos->isEmpty())                            
                            <div class="form-row p-1">
                                <label for="=InputAddress">Dirección</label>
                                <input name="Address" type="text" class="form-control" id="=InputAddress" aria-describedby="AddressHelp" required>
                                <small id="AddressHelp" class="form-text text-muted">Calle, colonia, No. Ext., No. Int., C.P., Municipio, Ciudad</small>
                            </div>
                            <div class="form-row p-1">
                                <div class="col">
                                    <label for="=InputTelefono">Telefono</label>
                                    <input name="Phone" type="text" class="form-control" id="=InputPhone" aria-describedby="PhoneHelp" required>
                                    <small id="PhoneHelp" class="form-text text-muted">Numero a 10 digitos</small>
                                </div>
                                <div class="col">
                                    <label for="=InputWhatsapp">Whatsapp</label>
                                    <input name="Whatsapp" type="text" class="form-control" id="=InputWhatsapp" aria-describedby="PhoneHelp" required>
                                    <small id="PhoneHelp" class="form-text text-muted">Numero a 10 digitos sin espacios</small>
                                </div>
                            </div>
                            <div class="form-row p-1">
                                <label for="=InputTelefono">Correo Electronico</label>
                                <input name="Email" type="text" class="form-control" id="=InputEmail" required>
                            </div>
                            <div class="form-row p-1">
                                <div class="col">
                                    <label for="=InputFacebook">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">www.facebook.com/</div>
                                        </div>
                                        <input name="Facebook" type="text" class="form-control" id="InputFacebook" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="=InputInstagram">Instagram</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">www.instagram.com/</div>
                                        </div>
                                        <input name="Instagram" type="text" class="form-control" id="InputInstagram" placeholder="Username">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row p-1">

                                <div class="col">
                                    <label for="=InputTwitter">Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">www.twitter.com/</div>
                                        </div>
                                        <input name="Twitter" type="text" class="form-control" id="InputTwitter" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="=InputLinkedin">LinkedIn</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">www.linkedin.com/company</div>
                                        </div>
                                        <input name="Linkedin" type="text" class="form-control" id="InputLinkedin" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            
                        @else
                            @foreach($datos as $dato)
                                <div class="form-group">
                                    <label for="exampleInputAddress">Dirección</label>
                                    <input name="Address" value="{{$dato->address}}" type="text" class="form-control" id="exampleInputAddress" aria-describedby="AddressHelp" required>
                                    <small id="AddressHelp" class="form-text text-muted">Calle, colonia, No. Ext., No. Int., C.P., Municipio, Ciudad</small>
                                </div>
                                <div class="form-row p-1">
                                    <div class="col">
                                        <label for="exampleInputTelefono">Telefono</label>
                                        <input name="Phone" value="{{$dato->phone}}" type="text" class="form-control" id="exampleInputTelefono" aria-describedby="PhoneHelp" required>
                                        <small id="PhoneHelp" class="form-text text-muted">Numero a 10 digitos</small>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputWhatsapp">Whatsapp</label>
                                        <input name="Whatsapp" value="{{$dato->whatsapp}}" type="text" class="form-control" id="exampleInputWhatsapp" aria-describedby="WhatsappHelp" required>
                                        <small id="WhatsappHelp" class="form-text text-muted">Numero a 10 digitos sin espacios</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTelefono">Correo Electronico</label>
                                    <input name="Email" value="{{$dato->email}}" type="text" class="form-control" id="exampleInputTelefono" required>
                                </div>
                                <div class="form-row p-1">
                                    <div class="col">
                                        <label for="=InputFacebook">Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">www.facebook.com/</div>
                                            </div>
                                            <input name="Facebook" value="{{$dato->facebook}}" type="text" class="form-control" id="InputFacebook" placeholder="Username">
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <label for="=InputInstagram">Instagram</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">www.instagram.com/</div>
                                            </div>
                                            <input name="Instagram" value="{{$dato->instagram}}" type="text" class="form-control" id="InputInstagram" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-row p-1">
    
                                    <div class="col">
                                        <label for="=InputTwitter">Twitter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">www.twitter.com/</div>
                                            </div>
                                            <input name="Twitter" value="{{$dato->twitter}}" type="text" class="form-control" id="InputTwitter" placeholder="Username">
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <label for="=InputLinkedin">LinkedIn</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">www.linkedin.com/company</div>
                                            </div>
                                            <input name="Linkedin" value="{{$dato->linkedin}}" type="text" class="form-control" id="InputLinkedin" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection

@section("scripts")
<script>
    $('#btndelete').on('click', function() {
        let id = $(this).val();
        let decision = confirm("Seguro que desea eliminar este mensaje");
        if (decision) {
            $.ajax({
                type: 'POST',
                url: `/admin/eliminar-mensaje/${id}`,
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                },
                success: function (data) {
                    alert("Producto eliminado");
                    location.replace("/admin/mensajes");
                },
                error: function () {
                
                }
            });
        }
    });

</script>
@endsection
