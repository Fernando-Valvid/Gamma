@extends("admin.layout")
@section('title')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0"> Aviso De Privacidad</h1>
        </div>
        
    </div>
@endsection
@section("content")
    @if ($errors->any())
        <div class="alert alert-danger col-12"><ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul></div>
    @endif
    <div class="card card-primary col-12 p-0">
        <div class="card-header">
            <h3 class="card-title">Actualizar El Aviso De Privacidad</h3>
        </div>
        <!-- form start -->
        @if($data)
            <form action="{{route("aviso-privacidad.store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="txtAvisoPriv" aria-describedby="AvisoHelp">Aviso de privacidad</label>
                        <small id="AvisoHelp" class="form-text text-muted">
                            Recuerda usar los estilos para darle jerarquia y diseño a tu texto.
                        </small>
                        <textarea name="AvisoPriv" id="AvisoPriv" type="text" class="form-control"> {{ $data->contenido }} </textarea>
                    </div>
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary col-12">Guardar</button>
                </div>
            </form>
        @else
            <form action="{{route("aviso-privacidad.store")}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="txtAvisoPriv" aria-describedby="AvisoHelp">Aviso de privacidad</label>
                        <small id="AvisoHelp" class="form-text text-muted">
                            Recuerda usar los estilos para darle jerarquia y diseño a tu texto.
                        </small>
                        <textarea name="AvisoPriv" id="AvisoPriv" type="text" class="form-control" placeholder="Escribe el aviso de privacidad"> </textarea>
                    </div>
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary col-12">Guardar</button>
                </div>
            </form>
        @endif
    </div>
@endsection
@section('scripts')
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

  <script src="{{ asset('ckeditor/config.js') }}"></script>

  <script>
      CKEDITOR.replace('AvisoPriv',{

      });
  </script>
@endsection
