
<?php $__env->startSection('title'); ?>
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Imagenes del Carrusel de Inicio</h1>
            <p>En este apartado podrás activar y desactivar las imágenes que se muestren en el carrusel de inicio</p>
        </div>
        <div class="col-6 text-right">
            
            <button type="button" id="btn" class="btn btn-primary"> 
                Actualizar
            </button>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

</style>
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
                    <table id="imagenes-table" class="table table-bordered table-hover">
                        <caption class="text-right">
                            
                        </caption>
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Status Servicio</th>
                            <th>Mostrar Imagen</th>
                            <th >Editar Imagen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $servicios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $servicio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($servicio->id != 1): ?>
                                <tr>
                                    <td class="text-center align-middle"><?php echo e($servicio->id); ?></td>
                                    <td class="text-center align-middle"><?php echo e($servicio->nombre); ?></td>
                                    <td class="text-center align-middle">
                                        <img src="<?php echo e(asset ('img/productos/' . $servicio->imagen)); ?>" style="width:15rem">
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php if($servicio->status == 1): ?>
                                            Activo
                                        <?php else: ?>
                                            Inactivo
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center align-middle">
                                        <?php if($servicio->destacado == true): ?>
                                            <input class="check" type="checkbox" id="destacado-<?php echo e($servicio->id); ?>" name="destacado" value="<?php echo e($servicio->id); ?>" checked>
                                        <?php else: ?>
                                            <input class="check" type="checkbox" id="destacado-<?php echo e($servicio->id); ?>" name="destacado" value="<?php echo e($servicio->id); ?>">
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center align-middle"><a href="<?php echo e(url("/admin/editar-productos/".$servicio->id)); ?>" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i></a></td>
                                </tr>
                            <?php endif; ?>
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
    var checks = document.querySelectorAll(".check");
    // Numero maximo de casillas marcadas
    var max = 5;
    for (var i = 0; i < checks.length; i++)
    checks[i].onclick = selectiveCheck;
    function selectiveCheck (event) {
        var checkedChecks = document.querySelectorAll(".check:checked");
        if (checkedChecks.length >= max + 1){
            Swal.fire({
                        title: 'Solo puedes seleccionar un máximo de 5 imágenes!',
                        text: '',
                        icon:'warning',
                        
                    })
            return false;
        }
    }
</script>


<script>
    function getSelectedCheckboxValues(name) {
        const checkboxes = document.querySelectorAll(`input[name="${name}"]:checked`);
        let values = [];
        checkboxes.forEach((checkbox) => {
            values.push(checkbox.value);
        });
        return values;
    }
    
    const btn = document.querySelector('#btn');
    btn.addEventListener('click', (event) => {
        let ids = getSelectedCheckboxValues('destacado');
        console.log(ids);
        jQuery.ajax({
            type: "POST",
            url: '/admin/actualizar-carrusel',
            
            data: {
                '_token' : '<?php echo e(csrf_token()); ?>',
                destacados: ids,
            },
            success: function (data) {
                Swal.fire({
                        title: 'Las imagenes mostradas en el carrusel fueron actualizadas!',
                        text: '',
                        icon:'success',
                    })
                },
            error: function () {
                Swal.fire({
                        title: 'Oops...!',
                        text: 'Algo salió mal al intentar actualizar, comunícate con soporte técnico',
                        icon:'error',
                    })
            }
        });
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrador\OneDrive\Escritorio\Nuevo grupo\resources\views/admin/carrusel/show.blade.php ENDPATH**/ ?>