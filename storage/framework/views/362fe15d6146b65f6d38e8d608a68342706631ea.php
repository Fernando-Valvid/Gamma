<div>
    <section id="contacto" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contáctanos</h3>
            </div>

            <div class="row contact-info">
                
                    <?php $__empty_1 = true; $__currentLoopData = $informacion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-4">
                                <div class="contact-phone">
                                    <i class="ion-ios-telephone-outline"></i>
                                    <h3>Teléfono</h3>
                                    <p><a href="tel:+52 (55) 5112 7794"> <?php echo e($data->phone); ?> </a></p>
                                </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3>Dirección</h3>
                                <p><a href=""> <?php echo e($data->address); ?> </a></p>
                            </div>
                        </div>
        
                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>Correo</h3>
                                
                                <p><a href="mailto:<?php echo e($data->mail); ?>"> <?php echo e($data->email); ?> </a></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>   
                        <div class="col-md-4">
                            <div class="contact-phone">
                                <i class="ion-ios-telephone-outline"></i>
                                <h3>Teléfono</h3>
                                <p><a>¡Próximamente!</a></p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="contact-address">
                                <i class="ion-ios-location-outline"></i>
                                <h3>Dirección</h3>
                                <p><a>¡Próximamente!</a></p>
                            </div>
                        </div>
        
                        <div class="col-md-4">
                            <div class="contact-email">
                                <i class="ion-ios-email-outline"></i>
                                <h3>Correo</h3>
                                <p><a>¡Próximamente!</a></p>
                            </div>
                        </div>
                    <?php endif; ?>
                
            </div>

            <div class="form">
                <div id="errormessage"></div>
                <form action="<?php echo e(route('contactanos.store')); ?>" method="POST" role="form" class="contactForm">
                    <?php echo csrf_field(); ?>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombre de Contacto" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Teléfono" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
                            <div class="validation"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5"  data-msg="Please write something for us" placeholder="Mensaje y/o Requerimiento" required></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form>

                <?php if(session('info')): ?>
                    <script>
                        alert("<?php echo e(session('info')); ?>");
                    </script>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<?php /**PATH /homepages/8/d479879361/htdocs/clickandbuilds/GammaGEP/resources/views/livewire/contact.blade.php ENDPATH**/ ?>