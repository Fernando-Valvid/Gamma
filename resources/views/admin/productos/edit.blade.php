@extends("admin.layout")
@section("content")

<body onload="loader()">
    @if ($errors->any())
        <div class="alert alert-danger col-12"><ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul></div>
    @endif
    <div id="loader"></div>
    <div style="display:none;" id="myDiv" class="card card-primary col-12 p-0">
        <div class="card-header">
            <h3 class="card-title">Modificar Servicio</h3>
        </div>
        <!-- form start -->
        <form action="{{url("/admin/actualizar-producto/".$producto->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="txtNombre" aria-describedby="NombreHelper">Nombre</label>
                    <small id="NombreHelper" class="form-text text-muted">
                        Este nombre aparecerá tanto en la barra de navegación como título de la página creada.
                    </small>
                    <input value="{{$producto->nombre}}" 
                        name="nombre" type="text" 
                        class="form-control" id="txtNombre">
                </div>
                <div class="form-group">
                    <label for="txtIntroduccion">Introduccion</label>
                    <textarea name="introduccion" id="introduccion"
                        type="text" class="form-control"
                        placeholder="Ingresa una introducción">
                        {{$producto->introduccion}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" aria-describedby="PrimeraImgHelp">Primera Imagen</label>
                    <small id="PrimeraImgHelp" class="form-text text-muted">
                        Esta primer imagen aparecerá a la izquierda de la introducción. La imagen no debe pasar los 2048kb.
                    </small>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="imagen" type="file"
                                class="custom-file-input"
                                id="inputImagen" accept="image/*">
                            <label class="custom-file-label" for="inputImagen">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtDescripcion" aria-describedby="PrimeraImgHelp">Descripción de la Primera Imagen</label>
                    <small id="PrimeraImgHelp" class="form-text text-muted">
                        Esta breve descripción se mostrará en caso de que la imagen no se pueda cargar.
                    </small>
                    <input value="{{$producto->imagenDesc}}"
                        name="imagenDesc" type="text" 
                        class="form-control" id="imagenDesc"
                        placeholder="Ingresa la descripción de la primera imagen">
                </div>
                <div class="form-group">
                    <label for="txtDescripcion">Descripción</label>
                    <textarea name="descripcion" type="text"
                        class="form-control" id="descripcion"
                        placeholder="Ingresa la descripción">
                        {{$producto->descripcion}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="txtContenido">Contenido</label>
                    <textarea name="contenido" type="text"
                        class="form-control" id="txtContenido"
                        placeholder="Ingresa el contenido">
                        {{$producto->contenido}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="txtDiferenciadores">Diferenciadores</label>
                    <textarea name="diferenciadores" type="text"
                        class="form-control" id="txtDiferenciadores"
                        placeholder="Ingresa el diferenciador">
                        {{$producto->diferenciadores}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="txtCarac_adic">Caracteristicas Adicionales</label>
                    <textarea name="carac_adi" type="text"
                        class="form-control" id="carac_adi"
                        placeholder="Ingresa caracteristicas adicionales">
                        {{$producto->carac_adi}}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="txtInfo_adi">Información Adicional</label>
                    <textarea name="info_adi" type="text"
                        class="form-control" id="info_adi"
                        placeholder="Ingresa el diferenciador">
                        {{$producto->info_adi}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile" aria-describedby="SegundaImgHelper">Segunda Imagen</label>
                    <small id="SegundaImgHelper" class="form-text text-muted">
                        Esta segunda imagen imagen aparecerá a la izquierda de la información adicional. La imagen no debe pasar los 2048kb.
                    </small>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="imagen2" type="file"
                                class="custom-file-input"
                                id="inputImagen" accept="image/*">
                            <label class="custom-file-label" for="inputImagen">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtDescripcion" aria-describedby="SegundaImgHelp">Descripción de la Segunda Imagen</label>
                    <small id="SegundaImgHelp" class="form-text text-muted">
                        Esta breve descripción se mostrará en caso de que la imagen no se pueda cargar.
                    </small>
                    <input value="{{$producto->imagen2Desc}}"
                        name="imagen2Desc"
                        type="text" class="form-control"
                        id="imagen2Desc" 
                        placeholder="Ingresa la descripción de la segunda imagen"/>
                </div>
                <div class="container">
                    <div class="col-md-12 d-flex justify-content-between p-0">
                        <label for="txtPreguntas" aria-describedby="PreguntasHelper">Preguntas Frecuentes del Servicio</label>
                        <input type="button" class="btn btn-success" id="add_pregunta()" onClick="addPregunta()" value="Agregar" />
                    </div>
                    <small id="PreguntasHelper" class="form-text text-muted mt-n3">
                        En este apartado podrás agregar respuestas a las preguntas frecuentes que tienen tus clientes.
                    </small>
                    <!-- El id="Preguntas" indica que la función de JavaScript dejará aquí el resultado -->
                    <div class="form-group" id="Preguntas">
                        @php
                            $preguntas = json_decode($producto->preguntas);
                            $respuestas = json_decode($producto->respuestas);
                        @endphp
                        @for($i = 0; $i < @count($preguntas); $i++)
                            <div  class="pregunta_{{$i}}"> 
                                <label for="txtNombre">Pregunta</label>
                                <input class="form-control" name="preguntas[]" type="text" value="{{$preguntas[$i]}}"/>
                            </div>
                            <div class="respuesta_{{$i}}">
                                <label for="txtNombre">Respuesta</label>
                                <input class="form-control" name="respuestas[]" type="text" value="{{$respuestas[$i]}}"/>
                                <button type="button" class="badge badge-pill badge-danger" id="delete_pregunta()" onClick="deletePregunta({{$i}})">Eliminar</button>
                            </div>
                        @endfor
                            
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" aria-describedby="LogoImgHelper">Imagen Logo</label>
                    <small id="LogoImgHelper" class="form-text text-muted">
                        Esta imagen aparecerá en la parte superior como logo del servicio. La imagen no debe pasar los 2048kb.
                    </small>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="imagenLogo" type="file"
                                class="custom-file-input"
                                id="inputImagen" accept="image/*">
                            <label class="custom-file-label" for="inputImagen">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtLogoImg" aria-describedby="LogoImgHelp">Descripción de la Imagen Logo</label>
                    <small id="LogoImgHelp" class="form-text text-muted">
                        Esta breve descripción se mostrará en caso de que la imagen no se pueda cargar.
                    </small>
                    <input value="{{$producto->imagenLogoDesc}}"
                        name="imagenLogoDesc" type="text"
                        class="form-control" id="imagenLogoDesc"
                        placeholder="Ingresa la descripción de la imagen logo"/>
                </div>

                {{-- <div class="form-group">
                    <label for="listStatus" aria-describedby="StatusHelper">Status</label>
                    <small id="StatusHelper" class="form-text text-muted">
                        Determina si el menú se muestra en la barra de navegación o no.
                    </small>
                    <select name="status" class="form-control selectpicker" id="listStatus" name="listStatus">
                        @if($producto->status==1)
                            <option selected value="1">Activo</option>
                            <option  value="0">Inactivo</option>
                        @else
                            <option value="1">Activo</option>
                            <option selected value="0">Inactivo</option>
                        @endif
                    </select>
                </div> --}}

                {{-- <div class="form-group">
                    <label for="listClasificacion" aria-describedby="ClasificacionHelper">Clasificación</label>
                    <small id="ClasificacionHelper" class="form-text text-muted">
                        Determina si es es un submenú de una servicio existente.
                    </small>
                    <select name="clasificacion" class="form-control" data-live-search="true" id="listClasificacion" name="listClasificacion">
                        @foreach($clasificaciones as $clasificacion)
                        <option value="{{$clasificacion->id}}" {{$clasificacion->id==$producto->padre_id?'selected':''}}>{{$clasificacion->nombre}}</option>
                        @endforeach
                    </select>
                </div> --}}

                <div class="form-group form-row">
                    <div class="col-md-6">
                        <label for="listStatus" aria-describedby="StatusHelper">Status</label>
                        <small id="StatusHelper" class="form-text text-muted"> 
                            Determina si el menú se muestra en la barra de navegación o no.
                        </small>
                        <select name="status" class="form-control selectpicker" id="listStatus" name="listStatus">
                            @if($producto->status==1)
                                <option selected value="1">Activo</option>
                                <option  value="0">Inactivo</option>
                            @else
                                <option value="1">Activo</option>
                                <option selected value="0">Inactivo</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="listClasificacion" aria-describedby="ClasificacionHelper">Clasificación</label>
                        <small id="ClasificacionHelper" class="form-text text-muted">
                            Determina si es es un submenú de una servicio existente.
                        </small>
                        <select name="clasificacion" class="form-control" data-live-search="true" id="listClasificacion" name="listClasificacion">
                            @foreach($clasificaciones as $clasificacion)
                                @if($clasificacion->id != $producto->id)
                                    <option value="{{$clasificacion->id}}" {{$clasificacion->id==$producto->padre_id?'selected':''}}>{{$clasificacion->nombre}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div> 

                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputFile" aria-describedby="CarruselImgsHelper">Imagenes del Carrusel</label>
                        <small id="CarruselImgsHelper" class="form-text text-muted">
                            Solo puedes seleccionar 5 imagenes en total. Cada imagen no debe pasar los 2048kb.
                        </small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="imagenes[]" multiple type="file"
                                    class="custom-file-input"
                                    id="inputImagen" accept="image/*">
                                <label class="custom-file-label" for="inputImagen">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile" aria-describedby="BienvenidaHelper">Imagen Carrusel de Bienvenida</label>
                    <small id="BienvenidaHelper" class="form-text text-muted">
                        Esta imagen se mostrara en el carrusel de la pagina de inicio, solo en caso de ser seleccionada para ser vista.
                    </small>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="bienvenida" type="file"
                                class="custom-file-input"
                                id="inputImagen" accept="image/*">
                            <label class="custom-file-label" for="inputImagen">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    {{-- <div class="form-check text-center">
                        <input class="form-check-input" name="destacado" {{$imagenDestacada == true?'checked':'' }} type="checkbox" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Activar imagen
                        </label>
                    </div> --}}
                </div>
                <!--<div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>-->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary col-12">Modificar</button>
            </div>
        </form>
    </div>
</body>

@endsection
@section('scripts')
{{-- Loader --}}
    <script>
        var myVar;
        
        function loader() {
            myVar = setTimeout(showPage, 1100);
        }
        
        function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        }
    </script>
{{-- Preguntas y respuestas --}}
    <script>
        a = 0;
        function addPregunta(){
                a++;

                var div = document.createElement('div');
                // div.setAttribute('class', 'form-inline');
                div.innerHTML = '<div  class="pregunta_'+a+' "> '+
                                    '<label for="txtNombre">Pregunta</label>'+
                                    '<input class="form-control" name="preguntas[]" type="text" required>{{old("preguntas[]")}}</input></div>'+
                                '<div class="respuesta_'+a+'">'+
                                    '<label for="txtNombre">Respuesta</label>'+
                                    '<input class="form-control" name="respuestas[]" type="text" required>{{old("respuestas[]")}}</input>'+
                                    '<button type="button" class="badge badge-pill badge-danger id="delete_pregunta()" onClick="deletePregunta('+a+')"">Eliminar</button>'+
                                '</div>';
                document.getElementById('Preguntas').appendChild(div);document.getElementById('Preguntas').appendChild(div);
        }

        function deletePregunta(id){
            console.log('Entra')
            $("div").remove(".pregunta_"+id);
            $("div").remove(".respuesta_"+id);
        }
    </script>
{{-- Text area with editor --}}
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    <script src="{{ asset('ckeditor/config.js') }}"></script>

    <script>
        CKEDITOR.replace('introduccion',{});
    </script>

    <script>
        CKEDITOR.replace('descripcion',{});
        CKEDITOR.replace('contenido',{});
        CKEDITOR.replace('diferenciadores',{});
        CKEDITOR.replace('carac_adi',{});
        CKEDITOR.replace('info_adi',{});
        CKEDITOR.replace('cont_extra',{});
    </script>
@endsection
