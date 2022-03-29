
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
            <form action="<?php echo e(url("/admin/actualizar-metadatos/".$metadatos->id)); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="txtMetaTitle" aria-describedby="metaTitleHelp">Titulo de la pestaña</label>
                        <small id="metaTitleHelp" class="form-text text-muted">
                            Este pequeño texto se mostrará en la pestaña del navegador como título de la página.
                        </small>
                        <input value="<?php echo e($metadatos->product_meta_title); ?>"
                            name="meta_title" type="text" class="form-control"
                            id="MetaTitle" placeholder="Ingresa el título de la página"
                            <?php echo e(old("MetaTitle")); ?>/>
                    </div>

                    <div class="form-group">
                        <label for="txtMetaDescription" aria-describedby="metaDescriptionHelp">Descripción del contenido</label>
                        <small id="metaDescriptionHelp" class="form-text text-muted">
                            Este pequeño texto ayudará con el SEO y se mostrara como descripción de la página en los navegadores web.
                        </small>
                        <input value="<?php echo e($metadatos->product_meta_description); ?>"
                            name="meta_description" type="text" class="form-control"
                            id="MetaDescription" placeholder="Ingresa la descripción de la página web"
                            <?php echo e(old("MetaDescription")); ?>/>
                    </div>

                    <div class="form-group">
                        <label for="txtMetaKeywords" aria-describedby="metaKeywordsHelp">Palabras clave</label>
                        <small id="metaKeywordsHelp" class="form-text text-muted">
                            Las palabras clave, DEBEN estar separadas por una coma (,) y deben ser palabras que definan el contenido de esta página web.
                        </small>
                        <input value="<?php echo e($metadatos->product_meta_keywords); ?>"
                                name="meta_keywords" type="text" class="form-control"
                                id="MetaKeywords" placeholder="Ingresa las palabras clave de la página web">
                                <?php echo e(old("MetaKeywords")); ?>

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
    

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Estadia\pyxis\resources\views/admin/metadatos/edit.blade.php ENDPATH**/ ?>