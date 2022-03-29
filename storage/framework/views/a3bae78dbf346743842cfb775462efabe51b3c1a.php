
<?php $__env->startSection('title'); ?>
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Metadatos de servicios</h1>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php if(session('guardado')): ?>
        <div class="alert alert-success col-12" role="alert">
            <i class="fas fa-check"></i> <?php echo e(session('guardado')); ?>

        </div>
    <?php elseif(session('fallo')): ?>
        <div class="alert alert-danger col-12" role="alert">
            <i class="fas fa-times"></i> <?php echo e(session('fallo')); ?>

        </div>
    <?php endif; ?>
            <div class="card col-12 p-0">
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="metadatos-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            
                            <th>Página</th>
                            <th>Status</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Palabras clave</th>
                            <th class="text-center">Editar</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($producto->nombre); ?></td>
                                <td><?php echo e($producto->status_string); ?></td>
                                <td><?php echo e($producto->metaTitle_string); ?></td>
                                <td><?php echo e($producto->metaDescription_string); ?></td>
                                <td><?php echo e($producto->metaKeywords_string); ?></td>
                                <td class="text-center"><a href="<?php echo e(url("/admin/editar-metadatos/".$producto->id)); ?>" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
<script>

    
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Estadia\pyxis\resources\views/admin/metadatos/show.blade.php ENDPATH**/ ?>