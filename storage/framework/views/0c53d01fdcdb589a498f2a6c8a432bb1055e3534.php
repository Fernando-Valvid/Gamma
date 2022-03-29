

<?php $__env->startSection('title'); ?>
    <div class="row">
        <div class="col-6">
            <h1 class="m-0">Modificar Información de contacto</h1>
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
    <?php elseif($datos->isEmpty()): ?>

        <div class="alert alert-warning col-12" role="alert">
            <i class="fas fa-info-circle"></i> Sin información disponible
        </div>
    <?php endif; ?>

    
    
            <div class="card col-12 p-0">
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route("informacion.store")); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <!-- /.En caso de que no haya datos registrados -->
                        <?php if($datos->isEmpty()): ?>                            
                            <div class="form-row p-1">
                                <label for="=InputAddress">Dirección</label>
                                <input name="Address" type="text" class="form-control" id="=InputAddress" aria-describedby="AddressHelp" required>
                                <small id="AddressHelp" class="form-text text-muted">Calle, colonia, No. Ext., No. Int., C.P., Municipio, Ciudad</small>
                            </div>
                            <div class="form-row p-1">
                                <div class="col">
                                    <label for="=InputTelefono">Telefono</label>
                                    <input name="Phone" type="text" class="form-control" id="=InputPhone" aria-describedby="PhoneHelp" required>
                                    <small id="PhoneHelp" class="form-text text-muted">Numero a 10 digitos</small>
                                </div>
                                <div class="col">
                                    <label for="=InputWhatsapp">Whatsapp</label>
                                    <input name="Whatsapp" type="text" class="form-control" id="=InputWhatsapp" aria-describedby="PhoneHelp" required>
                                    <small id="PhoneHelp" class="form-text text-muted">Numero a 10 digitos sin espacios</small>
                                </div>
                            </div>
                            <div class="form-row p-1">
                                <label for="=InputTelefono">Correo Electronico</label>
                                <input name="Email" type="text" class="form-control" id="=InputEmail" required>
                            </div>
                            <div class="form-row p-1">
                                <div class="col">
                                    <label for="=InputFacebook">Facebook</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">www.facebook.com/</div>
                                        </div>
                                        <input name="Facebook" type="text" class="form-control" id="InputFacebook" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="=InputInstagram">Instagram</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">www.instagram.com/</div>
                                        </div>
                                        <input name="Instagram" type="text" class="form-control" id="InputInstagram" placeholder="Username">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row p-1">

                                <div class="col">
                                    <label for="=InputTwitter">Twitter</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">www.twitter.com/</div>
                                        </div>
                                        <input name="Twitter" type="text" class="form-control" id="InputTwitter" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col">
                                    <label for="=InputLinkedin">LinkedIn</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">www.linkedin.com/company</div>
                                        </div>
                                        <input name="Linkedin" type="text" class="form-control" id="InputLinkedin" placeholder="Username">
                                    </div>
                                </div>
                            </div>
                            
                        <?php else: ?>
                            <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dato): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="form-group">
                                    <label for="exampleInputAddress">Dirección</label>
                                    <input name="Address" value="<?php echo e($dato->address); ?>" type="text" class="form-control" id="exampleInputAddress" aria-describedby="AddressHelp" required>
                                    <small id="AddressHelp" class="form-text text-muted">Calle, colonia, No. Ext., No. Int., C.P., Municipio, Ciudad</small>
                                </div>
                                <div class="form-row p-1">
                                    <div class="col">
                                        <label for="exampleInputTelefono">Telefono</label>
                                        <input name="Phone" value="<?php echo e($dato->phone); ?>" type="text" class="form-control" id="exampleInputTelefono" aria-describedby="PhoneHelp" required>
                                        <small id="PhoneHelp" class="form-text text-muted">Numero a 10 digitos</small>
                                    </div>
                                    <div class="col">
                                        <label for="exampleInputWhatsapp">Whatsapp</label>
                                        <input name="Whatsapp" value="<?php echo e($dato->whatsapp); ?>" type="text" class="form-control" id="exampleInputWhatsapp" aria-describedby="WhatsappHelp" required>
                                        <small id="WhatsappHelp" class="form-text text-muted">Numero a 10 digitos sin espacios</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTelefono">Correo Electronico</label>
                                    <input name="Email" value="<?php echo e($dato->email); ?>" type="text" class="form-control" id="exampleInputTelefono" required>
                                </div>
                                <div class="form-row p-1">
                                    <div class="col">
                                        <label for="=InputFacebook">Facebook</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">www.facebook.com/</div>
                                            </div>
                                            <input name="Facebook" value="<?php echo e($dato->facebook); ?>" type="text" class="form-control" id="InputFacebook" placeholder="Username">
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <label for="=InputInstagram">Instagram</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">www.instagram.com/</div>
                                            </div>
                                            <input name="Instagram" value="<?php echo e($dato->instagram); ?>" type="text" class="form-control" id="InputInstagram" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-row p-1">
    
                                    <div class="col">
                                        <label for="=InputTwitter">Twitter</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">www.twitter.com/</div>
                                            </div>
                                            <input name="Twitter" value="<?php echo e($dato->twitter); ?>" type="text" class="form-control" id="InputTwitter" placeholder="Username">
                                        </div>
                                    </div>
    
                                    <div class="col">
                                        <label for="=InputLinkedin">LinkedIn</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">www.linkedin.com/company</div>
                                            </div>
                                            <input name="Linkedin" value="<?php echo e($dato->linkedin); ?>" type="text" class="form-control" id="InputLinkedin" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        <button type="submit" class="btn btn-primary mt-2">Guardar</button>
                    </form>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /homepages/8/d479879361/htdocs/clickandbuilds/GammaGEP/resources/views/admin/informacion/show.blade.php ENDPATH**/ ?>