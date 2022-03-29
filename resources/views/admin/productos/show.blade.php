@extends('admin.layout')
@section('title')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Servicios</h1>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary" href="{{route('productos.create')}}" id="create-producto"> <i class="fas fa-plus"></i> Crear un nuevo servicio</a>
        </div>
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
    @endif
            <div class="card col-12 p-0">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="productos-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Status</th>
                            <th>Slug</th>
                            <th>Padre</th>

                            <th class="text-center">Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($productos as $producto)
                            @if($producto->id != 1)
                                <tr>
                                    <td>{{$producto->id}}</td>
                                    <td>{{$producto->nombre}}</td>
                                    <td>{{$producto->status_string}}</td>
                                    <td>{{$producto->slug}}</td>
                                    @if($producto->padre)
                                    <td>{{$producto->padre->nombre}}</td>
                                    @else
                                        <td>Menu</td>
                                    @endif

                                    <td class="text-center"><a href="{{url("/admin/editar-productos/".$producto->id)}}" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a></td>
                                    <td class="text-center"><button value="{{$producto->id}}" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button></td>
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
<script>

    $('#productos-table').on('click', '.delete', function() {
        var id = $(this).val();
        Swal.fire({
        title: 'Deseas eliminar el producto?',
        icon: 'question',
        showCancelButton: true,
        buttonsStyling: false,
        customClass: {
            confirmButton: 'btn btn-danger m-3',
            cancelButton: 'btn btn-secondary m-3',
        },
        confirmButtonText: 'Eliminar',
        cancelButtonText: `Cancelar`,
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                type: 'POST',
                url: "/admin/eliminar-producto/" + id,
                data: {
                    '_token': '{{csrf_token()}}',
                    'id': id,
                },
                success: function (data) {
                    Swal.fire({
                        title: 'El producto fue eliminado con exito!',
                        text: '',
                        icon:'success',
                        timer: 2000,
                    })
                    location.reload();

                },
                error: function () {
                    Swal.fire({
                        title: 'No se pudo eliminar el producto',
                        text: 'Algunos productos dependen de la existencia de este producto, cambia al padre de esos productos o en su defecto eliminalos antes de este.',
                        icon: 'error',
                    })
                }
            });
                
            } else if (result.isDenied) {
                Swal.fire('Algo salio mal, contacta a soporte tecnico', '', 'info')
            }
        })
        
    });

    
</script>
@endsection
