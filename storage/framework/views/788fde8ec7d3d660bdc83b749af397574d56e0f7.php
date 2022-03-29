

<?php $__env->startSection('title'); ?>
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Mensajes Recibidos</h1>
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
                    <table id="messages-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Asunto</th>
                            <th>Fecha de llegada</th>

                            <th class="text-center">Visualizar</th>
                            <th class="text-center">Eliminar</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($message->id); ?></td>
                                <td><?php echo e($message->name); ?></td>
                                <td><?php echo e($message->asunto); ?></td>
                                <td><?php echo e($message->created_at); ?></td>
                                <td class="text-center"><a href="<?php echo e(url("/admin/ver-mensaje/".$message->id)); ?>" class="btn btn-secondary"><i class="fas fa-search"></i></a></td>
                                <td class="text-center">
                                    <button value="<?php echo e($message->id); ?>" id="btndelete" class="btn btn-danger delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
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
    $('#btndelete').on('click', function() {
        let id = $(this).val();
        let decision = confirm("Seguro que desea eliminar este mensaje");
        if (decision) {
            $.ajax({
                type: 'POST',
                url: `/admin/eliminar-mensaje/${id}`,
                data: {
                    '_token': '<?php echo e(csrf_token()); ?>',
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

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Estadia\pyxis\resources\views/admin/mensajes/watch.blade.php ENDPATH**/ ?>