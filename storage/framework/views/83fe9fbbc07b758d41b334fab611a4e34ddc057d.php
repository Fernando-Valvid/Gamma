<?php $__env->startSection("content"); ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger col-12"><ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul></div>
    <?php endif; ?>
    <div class="card card-primary col-12 p-0">
        <div class="card-header">
            <h3 class="card-title">Nuevo Servicio</h3>
        </div>
        <!-- form start -->
        <form action="<?php echo e(route("productos.store")); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="txtNombre">Nombre</label>
                    <input name="nombre" value="<?php echo e(old("nombre")); ?>" type="text" class="form-control" id="txtNombre" required="">
                </div>
                <div class="form-group">
                    <label for="txtIntroduccion">Introduccion</label>
                    <textarea name="introduccion" id="introduccion" type="text" class="form-control" placeholder="Ingresa una introducción"><?php echo e(old("introduccion")); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="txtDescripcion">Descripción</label>
                    <textarea name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Ingresa la descripción"><?php echo e(old("descripcion")); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Primera Imagen</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="imagen" value="<?php echo e(old("imagen")); ?>" type="file" class="custom-file-input" id="inputImagen">
                            <label class="custom-file-label" for="inputImagen">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtContenido">Contenido</label>
                    <textarea name="contenido" type="text" class="form-control" id="txtContenido" placeholder="Ingresa el contenido"><?php echo e(old("contenido")); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="txtDiferenciadores">Diferenciadores</label>
                    <textarea name="diferenciadores" type="text" class="form-control" id="txtDiferenciadores" placeholder="Ingresa el diferenciador"><?php echo e(old("diferenciadores")); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="listStatus">Status</label>
                    <select name="status" class="form-control selectpicker" id="listStatus" name="listStatus">
                        <?php echo e(old('status')); ?>

                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="txtCarac_adic">Caracteristicas Adicionales</label>
                    <textarea name="carac_adi" type="text" class="form-control" id="carac_adi" placeholder="Ingresa caracteristicas adicionales"><?php echo e(old("carac_adi")); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="txtInfo_adi">Información Adicional</label>
                    <textarea name="info_adi" type="text" class="form-control" id="info_adi" placeholder="Ingresa el diferenciador"><?php echo e(old("info_adi")); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="listClasificacion">Clasificación</label>
                    <select name="clasificacion" class="form-control" data-live-search="true" id="listClasificacion" name="listClasificacion">
                        <option value="">Menu</option>
                        <?php $__currentLoopData = $clasificaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clasificacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($clasificacion->id); ?>"><?php echo e($clasificacion->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Segunda Imagen</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="imagen2" type="file" class="custom-file-input" id="inputImagen">
                            <label class="custom-file-label" for="inputImagen">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Imagenes del Carrusel</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="imagenes[]" multiple type="file" class="custom-file-input" id="inputImagen">
                            <label class="custom-file-label" for="inputImagen">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Imagen Carrusel de Bienvenida</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="bienvenida" type="file" class="custom-file-input" id="inputImagen">
                            <label class="custom-file-label" for="inputImagen">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
                    <div class="form-check text-center">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Activar imagen
                        </label>
                    </div>
                </div>
             <!--<div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>-->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary col-12">Agregar</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>

    <script src="<?php echo e(asset('ckeditor/config.js')); ?>"></script>

    <script>
        CKEDITOR.replace('introduccion',{

        });
    </script>

    <script>
        CKEDITOR.replace('descripcion',{

        });
    </script>

    <script>
        CKEDITOR.replace('contenido',{

        });
    </script>

    <script>
        CKEDITOR.replace('diferenciadores',{

        });
    </script>

    <script>
        CKEDITOR.replace('carac_adi',{

        });
    </script>

    <script>
        CKEDITOR.replace('info_adi',{

        });
    </script>

    <script>
        CKEDITOR.replace('cont_extra',{

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pyxis\resources\views/admin/productos/create.blade.php ENDPATH**/ ?>