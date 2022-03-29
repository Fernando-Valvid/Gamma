@extends('admin.layout')
@section('title')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Imagenes del Carrusel de Inicio</h1>
            <p>En este apartado podrás activar y desactivar las imágenes que se muestren en el carrusel de inicio</p>
        </div>
        <div class="col-6 text-right">
            {{-- <a class="btn btn-primary" href="{{route('productos.create')}}" id="create-producto"> <i class="fas fa-save"></i>  Guardar Carrusel</a> --}}
            <button type="button" id="btn" class="btn btn-primary"> 
                Actualizar
            </button>
        </div>
    </div>
@endsection
@section('content')

</style>
    @if (session('guardado'))
        <div class="alert alert-success col-12" role="alert">
            <i class="fas fa-check"></i> {{ session('guardado') }}
        </div>
    @elseif(session('fallo'))
        <div class="alert alert-danger col-12" role="alert">
            <i class="fas fa-times"></i> {{ session('fallo') }}
        </div>
    @endif
            <div class="card col-12 p-0">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="imagenes-table" class="table table-bordered table-hover">
                        <caption class="text-right">
                            
                        </caption>
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Status Servicio</th>
                            <th>Mostrar Imagen</th>
                            <th >Editar Imagen</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($servicios as $servicio)
                            @if($servicio->id != 1)
                                <tr>
                                    <td class="text-center align-middle">{{$servicio->id}}</td>
                                    <td class="text-center align-middle">{{$servicio->nombre}}</td>
                                    <td class="text-center align-middle">
                                        <img src="{{ asset ('img/productos/' . $servicio->imagen)}}" style="width:15rem">
                                    </td>
                                    <td class="text-center align-middle">
                                        @if($servicio->status == 1)
                                            Activo
                                        @else
                                            Inactivo
                                        @endif
                                    </td>
                                    <td class="text-center align-middle">
                                        @if($servicio->destacado == true)
                                            <input class="check" type="checkbox" id="destacado-{{$servicio->id}}" name="destacado" value="{{$servicio->id}}" checked>
                                        @else
                                            <input class="check" type="checkbox" id="destacado-{{$servicio->id}}" name="destacado" value="{{$servicio->id}}">
                                        @endif
                                    </td>
                                    <td class="text-center align-middle"><a href="{{url("/admin/editar-productos/".$servicio->id)}}" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a></td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
@endsection

@section("scripts")

{{-- Funcion encargada de limitar el numero de checkboxes marcadas--}}
<script>
    var checks = document.querySelectorAll(".check");
    // Numero maximo de casillas marcadas
    var max = 5;
    for (var i = 0; i < checks.length; i++)
    checks[i].onclick = selectiveCheck;
    function selectiveCheck (event) {
        var checkedChecks = document.querySelectorAll(".check:checked");
        if (checkedChecks.length >= max + 1){
            Swal.fire({
                        title: 'Solo puedes seleccionar un máximo de 5 imágenes!',
                        text: '',
                        icon:'warning',
                        
                    })
            return false;
        }
    }
</script>


<script>
    function getSelectedCheckboxValues(name) {
        const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
        let values = [];
        checkboxes.forEach((checkbox) => {
            values.push(checkbox.value);
        });
        return values;
    }
    
    const btn = document.querySelector('#btn');
    btn.addEventListener('click', (event) => {
        let ids = getSelectedCheckboxValues('destacado');
        console.log(ids);
        jQuery.ajax({
            type: "POST",
            url: '/admin/actualizar-carrusel',
            
            data: {
                '_token' : '{{csrf_token()}}',
                destacados: ids,
            },
            success: function (data) {
                Swal.fire({
                        title: 'Las imagenes mostradas en el carrusel fueron actualizadas!',
                        text: '',
                        icon:'success',
                    })
                },
            error: function () {
                Swal.fire({
                        title: 'Oops...!',
                        text: 'Algo salió mal al intentar actualizar, comunícate con soporte técnico',
                        icon:'error',
                    })
            }
        });
    });

</script>
@endsection
