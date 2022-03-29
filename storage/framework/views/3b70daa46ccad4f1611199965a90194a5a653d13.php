
<?php $__env->startSection('title'); ?>
    <div class="row">
        <div class="col-6">
            <h1 class="m-0"> Mensaje Recibido</h1>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    
  
    <div class="card col-12 p-0">
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
          <div class="col-6 text-left">
            <a class="btn btn-primary" href="<?php echo e(route('mensajes.watch')); ?>" id="create-producto"> <i class="fas fa-long-arrow-alt-left"></i> Regresar</a>
          </div>

          <div class="col-6 text-right">
            <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button class="btn btn-danger delete" value="<?php echo e($data->id); ?>" id="btndelete"> <i class="fas fa-trash-alt"></i> Eliminar</button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>

        <?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <form class="contactForm">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?php echo e($data->name); ?>" readonly/>
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Correo electrónico</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php echo e($data->email); ?>" readonly/>
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Telefono</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo e($data->phone); ?>" readonly/>
                    <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlInput1">Asunto</label>
                    <input type="text" class="form-control" name="asunto" id="asunto" value="<?php echo e($data->asunto); ?>" readonly/>
                    <div class="validation"></div>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">Mensaje</label>
                <textarea class="form-control" name="message" rows="5" readonly> <?php echo e($data->message); ?></textarea>
                <div class="validation"></div>
            </div>
          </form>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <!-- /.card-body -->
    </div>
            <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection("scripts"); ?>
<script>
    // function delete(id){
        
    //     
    // }

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

    // console.log(document.getElementById("btndelete"));
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Estadia\pyxis\resources\views/admin/mensajes/show.blade.php ENDPATH**/ ?>