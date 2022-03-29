@extends('admin.layout')
@section('title')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Metadatos de servicios</h1>
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
                    <table id="metadatos-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            {{-- <th>#</th> --}}
                            <th>Página</th>
                            <th>Status</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Palabras clave</th>
                            <th class="text-center">Editar</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->status_string}}</td>
                                <td>{{$producto->metaTitle_string}}</td>
                                <td>{{$producto->metaDescription_string}}</td>
                                <td>{{$producto->metaKeywords_string}}</td>
                                <td class="text-center"><a href="{{url("/admin/editar-metadatos/".$producto->id)}}" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a></td>
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

    
</script>
@endsection
