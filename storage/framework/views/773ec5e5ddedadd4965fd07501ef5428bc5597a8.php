<?php $__env->startSection('title'); ?>
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Servicios</h1>
        </div>
        <div class="col-6 text-right">
            <a class="btn btn-primary" href="<?php echo e(route('productos.create')); ?>" id="create-producto"> <i class="fas fa-plus"></i> Crear un nuevo servicio</a>
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
                    <table id="productos-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Status</th>
                            <th>Slug</th>
                            <th>Padre</th>

                            <th class="text-center">Editar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($producto->id); ?></td>
                                <td><?php echo e($producto->nombre); ?></td>
                                <td><?php echo e($producto->status_string); ?></td>
                                <td><?php echo e($producto->slug); ?></td>
                                <?php if($producto->padre): ?>
                                <td><?php echo e($producto->padre->nombre); ?></td>
                                <?php else: ?>
                                    <td>Menu</td>
                                <?php endif; ?>

                                <td class="text-center"><a href="<?php echo e(url("/admin/editar-productos/".$producto->id)); ?>" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a></td>
                                <td class="text-center"><button value="<?php echo e($producto->id); ?>" class="btn btn-danger delete"><i class="fas fa-trash-alt"></i></button></td>
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
    $('#productos-table').on('click', '.delete', function() {
        var id = $(this).val();
        var desicion = confirm("Seguro que desea eliminar este producto");
        if (desicion) {
            $.ajax({
                type: 'POST',
                url: "/admin/eliminar-producto/" + id,
                data: {
                    '_token': '<?php echo e(csrf_token()); ?>',
                    'id': id,
                },
                success: function (data) {
                    alert("Producto eliminado");
                    location.reload();

                },
                error: function () {
                }
            });
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pyxis\resources\views/admin/productos/show.blade.php ENDPATH**/ ?>