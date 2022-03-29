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
                <h3 class="card-title">Agregar/Editar Metadatos</h3>
            </div>
            <!-- form start -->
            <form action="{{url("/admin/actualizar-metadatos/".$metadatos->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="txtMetaTitle" aria-describedby="metaTitleHelp">Titulo de la pestaña</label>
                        <small id="metaTitleHelp" class="form-text text-muted">
                            Este pequeño texto se mostrará en la pestaña del navegador como título de la página.
                        </small>
                        <input value="{{$metadatos->product_meta_title}}"
                            name="meta_title" type="text" class="form-control"
                            id="MetaTitle" placeholder="Ingresa el título de la página"
                            {{old("MetaTitle")}}/>
                    </div>

                    <div class="form-group">
                        <label for="txtMetaDescription" aria-describedby="metaDescriptionHelp">Descripción del contenido</label>
                        <small id="metaDescriptionHelp" class="form-text text-muted">
                            Este pequeño texto ayudará con el SEO y se mostrara como descripción de la página en los navegadores web.
                        </small>
                        <input value="{{$metadatos->product_meta_description}}"
                            name="meta_description" type="text" class="form-control"
                            id="MetaDescription" placeholder="Ingresa la descripción de la página web"
                            {{old("MetaDescription")}}/>
                    </div>

                    <div class="form-group">
                        <label for="txtMetaKeywords" aria-describedby="metaKeywordsHelp">Palabras clave</label>
                        <small id="metaKeywordsHelp" class="form-text text-muted">
                            Las palabras clave, DEBEN estar separadas por una coma (,) y deben ser palabras que definan el contenido de esta página web.
                        </small>
                        <input value="{{$metadatos->product_meta_keywords}}"
                                name="meta_keywords" type="text" class="form-control"
                                id="MetaKeywords" placeholder="Ingresa las palabras clave de la página web">
                                {{old("MetaKeywords")}}
                        </input>
                    </div>
                    
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary col-12">Actualizar</button>
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
            myVar = setTimeout(showPage, 1000);
        }
        
        function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        }
    </script>
@endsection
