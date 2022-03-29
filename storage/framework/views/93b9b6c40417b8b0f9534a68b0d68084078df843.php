<?php $__env->startSection("content"); ?>
<body onload="loader()">
    <?php if($errors->any()): ?>
        <div class="alert alert-danger col-12"><ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul></div>
    <?php endif; ?>
        <div id="loader"></div>
        <div style="display:none;" id="myDiv" class="card card-primary col-12 p-0">
            <div class="card-header">
                <h3 class="card-title">Nuevo Servicio</h3>
            </div>
            <!-- form start -->
            <form action="<?php echo e(route("productos.store")); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="txtNombre" aria-describedby="NombreHelper">Nombre</label>
                        <small id="NombreHelper" class="form-text text-muted">
                            Este nombre aparecerá tanto en la barra de navegación como título de la página creada.
                        </small>
                        <input name="nombre" value="<?php echo e(old("nombre")); ?>" type="text" class="form-control" id="txtNombre" required="">
                    </div>
                    <div class="form-group">
                        <label for="txtIntroduccion">Introduccion</label>
                        <textarea name="introduccion" id="introduccion"
                            type="text" class="form-control"
                            placeholder="Ingresa una introducción">
                            <?php echo e(old("introduccion")); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile" aria-describedby="PrimeraImgHelp">Primera Imagen</label>
                        <small id="PrimeraImgHelp" class="form-text text-muted">
                            Esta primer imagen aparecerá a la izquierda de la introducción. La imagen no debe pasar los 2048kb.
                        </small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="imagen" value="<?php echo e(old("imagen")); ?>"
                                    type="file" class="custom-file-input"
                                    id="inputImagen" aria-describedby="ImagenHelp"
                                    accept="image/*">
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
                        <input name="imagenDesc" type="text" 
                            class="form-control" id="imagenDesc"
                            placeholder="Ingresa la descripción de la primera imagen">
                            <?php echo e(old("imagenDesc")); ?>

                        </input>
                    </div>
                    <div class="form-group">
                        <label for="txtDescripcion">Descripción</label>
                        <textarea name="descripcion" type="text"
                            class="form-control" id="descripcion"
                            placeholder="Ingresa la descripción">
                            <?php echo e(old("descripcion")); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtContenido">Contenido</label>
                        <textarea name="contenido" type="text"
                            class="form-control" id="txtContenido"
                            placeholder="Ingresa el contenido">
                            <?php echo e(old("contenido")); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtDiferenciadores">Diferenciadores</label>
                        <textarea name="diferenciadores" type="text"
                            class="form-control" id="txtDiferenciadores" 
                            placeholder="Ingresa el diferenciador">
                            <?php echo e(old("diferenciadores")); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtCarac_adic">Caracteristicas Adicionales</label>
                        <textarea name="carac_adi" type="text"
                            class="form-control" id="carac_adi"
                            placeholder="Ingresa caracteristicas adicionales">
                            <?php echo e(old("carac_adi")); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label for="txtInfo_adi">Información Adicional</label>
                        <textarea name="info_adi" type="text"
                            class="form-control" id="info_adi"
                            placeholder="Ingresa el diferenciador">
                            <?php echo e(old("info_adi")); ?>

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
                        <input name="imagen2Desc" type="text" class="form-control" id="imagen2Desc" placeholder="Ingresa la descripción de la segunda imagen"><?php echo e(old("imagen2Desc")); ?></input>
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
                        <div class="form-group" id="Preguntas"></div>
                    </div>
    
                    <div class="form-group">
                        <label for="exampleInputFile" aria-describedby="LogoImgHelper">Imagen Logo</label>
                        <small id="LogoImgHelper" class="form-text text-muted">
                            Esta imagen aparecerá en la parte superior como logo del servicio. La imagen no debe pasar los 2048kb.
                        </small>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="imagenLogo" 
                                    class="custom-file-input" 
                                    id="inputImagen" type="file"
                                    accept="image/*">
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
                        <input name="imagenLogoDesc" type="text" class="form-control"
                                id="imagenLogoDesc" placeholder="Ingresa la descripción de la imagen logo">
                                <?php echo e(old("imagenLogoDesc")); ?>

                        </input>
                    </div>

                    <div class="form-group form-row">
                        <div class="col-md-6">
                            <label for="listStatus" aria-describedby="StatusHelper">Status</label>
                            <small id="StatusHelper" class="form-text text-muted"> 
                                Determina si el menú se muestra en la barra de navegación o no.
                            </small>
                            <select name="status" class="form-control selectpicker" id="listStatus" name="listStatus">
                                <?php echo e(old('status')); ?>

                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="listClasificacion" aria-describedby="ClasificacionHelper">Clasificación</label>
                            <small id="ClasificacionHelper" class="form-text text-muted">
                                Determina si es es un submenú de una servicio existente.
                            </small>
                            <select name="clasificacion" class="form-control" data-live-search="true" id="listClasificacion" name="listClasificacion">
                                
                                <?php $__currentLoopData = $clasificaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clasificacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($clasificacion->id); ?>"><?php echo e($clasificacion->nombre); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                    </div>                
                    <div class="form-group">
                        <label for="exampleInputFile" aria-describedby="CarruselImgsHelper">Imagenes del Carrusel</label>
                        <small id="CarruselImgHelper" class="form-text text-muted">
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
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary col-12">Agregar</button>
                </div>
            </form>
        </div>
    </body>
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

    <script>
        var myVar;
        
        function loader() {
            myVar = setTimeout(showPage, 1500);
        }
        
        function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        }
    </script>

    <script>
        a = 0;
        function addPregunta(){
                a++;

                var div = document.createElement('div');
                // div.setAttribute('class', 'form-inline');
                div.innerHTML = '<div  class="pregunta_'+a+' "> '+
                                    '<label for="txtNombre">Pregunta</label>'+
                                    '<input class="form-control" name="preguntas[]" type="text" required><?php echo e(old("preguntas[]")); ?></input></div>'+
                                '<div class="respuesta_'+a+'">'+
                                    '<label for="txtNombre">Respuesta</label>'+
                                    '<input class="form-control" name="respuestas[]" type="text" required><?php echo e(old("respuestas[]")); ?></input>'+
                                    '<button type="button" class="badge badge-pill badge-danger id="delete_pregunta()" onClick="deletePregunta('+a+')"">Eliminar</button>'+
                                '</div>';
                document.getElementById('Preguntas').appendChild(div);document.getElementById('Preguntas').appendChild(div);
        }

        function deletePregunta(id){
            $("div").remove(".pregunta_"+id);
            $("div").remove(".respuesta_"+id);
        }
    </script>


    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>

    <script src="<?php echo e(asset('ckeditor/config.js')); ?>"></script>

    <script>
        CKEDITOR.replace('introduccion',{});
        CKEDITOR.replace('descripcion',{});
        CKEDITOR.replace('contenido',{});
        CKEDITOR.replace('diferenciadores',{});
        CKEDITOR.replace('carac_adi',{});
        CKEDITOR.replace('info_adi',{});
        CKEDITOR.replace('cont_extra',{});
    </script>

    
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Estadia\pyxis\resources\views/admin/productos/create.blade.php ENDPATH**/ ?>