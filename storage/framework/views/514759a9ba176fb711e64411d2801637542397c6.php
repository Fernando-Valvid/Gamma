
<?php $__env->startSection('title'); ?>
    <div class="row">
        <div class="col-6">
            <h1 class="m-0"> Aviso De Privacidad</h1>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
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
            <h3 class="card-title">Actualizar El Aviso De Privacidad</h3>
        </div>
        <!-- form start -->
        <?php if($data): ?>
            <form action="<?php echo e(route("aviso-privacidad.store")); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="txtAvisoPriv" aria-describedby="AvisoHelp">Aviso de privacidad</label>
                        <small id="AvisoHelp" class="form-text text-muted">
                            Recuerda usar los estilos para darle jerarquia y diseño a tu texto.
                        </small>
                        <textarea name="AvisoPriv" id="AvisoPriv" type="text" class="form-control"> <?php echo e($data->contenido); ?> </textarea>
                    </div>
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary col-12">Guardar</button>
                </div>
            </form>
        <?php else: ?>
            <form action="<?php echo e(route("aviso-privacidad.store")); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
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
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
  <script src="<?php echo e(asset('ckeditor/ckeditor.js')); ?>"></script>

  <script src="<?php echo e(asset('ckeditor/config.js')); ?>"></script>

  <script>
      CKEDITOR.replace('AvisoPriv',{

      });
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Estadia\pyxis\resources\views/admin/avprivacidad/show.blade.php ENDPATH**/ ?>