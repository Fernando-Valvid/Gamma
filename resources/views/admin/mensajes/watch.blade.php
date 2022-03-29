{{-- Muestra  la lista de mensajes recibidos del formulario de contacto--}}
@extends('admin.layout')
@section('title')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Mensajes Recibidos</h1>
        </div>
        {{-- <div class="col-6 text-right">
            <a class="btn btn-primary" href="{{route('productos.create')}}" id="create-producto"> <i class="fas fa-plus"></i> Crear un nuevo servicio</a>
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
    @endif
            <div class="card col-12 p-0">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="messages-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Asunto</th>
                            <th>Fecha de llegada</th>

                            <th class="text-center">Visualizar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>{{$message->id}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->asunto}}</td>
                                <td>{{$message->created_at}}</td>
                                <td class="text-center"><a href="{{url("/admin/ver-mensaje/".$message->id)}}" class="btn btn-secondary"><i class="fas fa-search"></i></a></td>
                                <td class="text-center">
                                    <button value="{{$message->id}}" id="btndelete" class="btn btn-danger delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>
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
