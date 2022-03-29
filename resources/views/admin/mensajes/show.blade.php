@extends('admin.layout')
@section('title')
    <div class="row">
        <div class="col-6">
            <h1 class="m-0"> Mensaje Recibido</h1>
        </div>
        
    </div>
@endsection
@section('content')
    {{-- @if (session('guardado'))
        <div class="alert alert-success col-12" role="alert">
            <i class="fas fa-check"></i> {{ session('guardado') }}
        </div>
    @elseif(session('fallo'))
        <div class="alert alert-danger col-12" role="alert">
            <i class="fas fa-times"></i> {{ session('fallo') }}
        </div>
    @endif --}}
  
    <div class="card col-12 p-0">
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-6 text-left">
            <a class="btn btn-primary" href="{{route('mensajes.watch')}}" id="create-producto"> <i class="fas fa-long-arrow-alt-left"></i> Regresar</a>
          </div>

          <div class="col-6 text-right">
            @foreach($message as $data)
                <button class="btn btn-danger delete" value="{{$data->id}}" id="btndelete"> <i class="fas fa-trash-alt"></i> Eliminar</button>
            @endforeach
          </div>
        </div>

        @foreach($message as $data)
          <form class="contactForm">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$data->name}}" readonly/>
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$data->email}}" readonly/>
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Telefono</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{$data->phone}}" readonly/>
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Asunto</label>
                    <input type="text" class="form-control" name="asunto" id="asunto" value="{{$data->asunto}}" readonly/>
                    <div class="validation"></div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Mensaje</label>
                <textarea class="form-control" name="message" rows="5" readonly> {{$data->message}}</textarea>
                <div class="validation"></div>
            </div>
          </form>
      @endforeach
      </div>
      <!-- /.card-body -->
    </div>
            <!-- /.card -->
@endsection

@section("scripts")
<script>
    // function delete(id){
        
    //     
    // }

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

    // console.log(document.getElementById("btndelete"));
</script>
@endsection
