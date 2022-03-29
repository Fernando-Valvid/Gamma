<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
    <!-- Metadata's -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>Administrador</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('admin-lte/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('admin-lte/dist/css/adminlte.min.css')); ?>">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?php echo e(asset('css/dash-estilos.css')); ?>">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('admin-lte/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">


    <link
        rel="stylesheet"
        type="text/css"
        href="https://unpkg.com/file-upload-with-preview@4.1.0/dist/file-upload-with-preview.min.css"
    />

    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            
            
            <li class="nav-item">
                <a href="<?php echo e(url('/logout')); ?>" class="btn btn-danger">Cerrar Sesión</a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar  sidebar-light-dark elevation-4">


        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo e(asset('admin-lte/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <?php if(auth()->check()): ?>
                    <div class="info">

                        <a href="#" class="d-block"><?php echo e(Auth::user()->name); ?></a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="<?php echo e(route("productos.show")); ?>" class="nav-link">
                            <i class="fas fa-adjust"></i>
                            <p>Servicios</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route("metadatos.show")); ?>" class="nav-link">
                            <i class="fas fa-cogs"></i>
                            <p>Metadatos de Servicios</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo e(route("mensajes.watch")); ?>" class="nav-link">
                            <i class="fas fa-envelope"></i>
                            <p>Mensajes</p>
                        </a>
                    </li>

                    

                    <!-- menu1 -->
                    <li class="nav-item ">
                        <a href="#" class="nav-link ">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Editar Información
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route("informacion.create")); ?>" class="nav-link ">
                                    <i class="far fa-id-card nav-icon"></i>
                                    <p>Contacto</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route("aviso-privacidad.create")); ?>" class="nav-link">
                                    <i class="fas fa-user-secret nav-icon"></i>
                                    <p>Aviso de privacidad</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route("carrusel.show")); ?>" class="nav-link">
                                    <i class="far fa-images nav-icon"></i>
                                    <p>Carrusel de Inicio</p>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    

                    <!-- menu1
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Estadisticas
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>General</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Visitas</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Empleados</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Usuarios</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Subscripciones</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    -->

                    <!--  menu2
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Publicar
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="" class="nav-link active">
                                    <i class="fas fa-pen nav-icon"></i>
                                    <p>Post</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-trophy nav-icon"></i>
                                    <p>Recompensa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Empleados</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    -->

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-12">
                                <?php echo $__env->yieldContent('title'); ?>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <div class="row">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->


    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            GePyxis
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo e(asset('admin-lte/plugins/jquery/jquery.min.js')); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin-lte/dist/js/adminlte.min.js')); ?>"></script>


<!-- DataTables  & Plugins -->
<script src="<?php echo e(asset('admin-lte/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/jszip/jszip.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>

<!-- Sweet Alert 2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Sellect2 -->
<script src="<?php echo e(asset('admin-lte/plugins/select2/js/select2.full.min.js')); ?>"></script>

<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo e(asset('admin-lte/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')); ?>"></script>

<!-- Bootstrap Switch -->
<script src="<?php echo e(asset('admin-lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>

<!-- Page specific script -->

<script>
// Tabla de productos
    $(function () {
        $('#productos-table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        }).buttons().container().appendTo('#productos-table_wrapper .col-md-6:eq(0)');

        $('.select2').select2();

        $('.tags').select2({
            tags:true,
            maximumSelectionLength: 4
        });

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        /* jQueryKnob */

    })

// Tabla de mensajes Recibidos
    $(function () {

        $('#messages-table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        }).buttons().container().appendTo('#messages-table_wrapper .col-md-6:eq(0)');

        $('.select2').select2();

        $('.tags').select2({
            tags:true,
            maximumSelectionLength: 4
        });

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        /* jQueryKnob */

    })

// Tabla de carrusel de imagenes
    $(function () {

        $('#imagenes-table').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        }).buttons().container().appendTo('#imagenes-table_wrapper .col-md-6:eq(0)');

        $('.select2').select2();

        $('.tags').select2({
            tags:true,
            maximumSelectionLength: 4
        });

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        /* jQueryKnob */

    })

// Tabla de manejo de metadatos
    $(function () {

$('#metadatos-table').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": true,
    "responsive": true,
}).buttons().container().appendTo('#imagenes-table_wrapper .col-md-6:eq(0)');

$('.select2').select2();

$('.tags').select2({
    tags:true,
    maximumSelectionLength: 4
});

//Initialize Select2 Elements
$('.select2bs4').select2({
    theme: 'bootstrap4'
})
/* jQueryKnob */

})

</script>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\Users\Administrador\OneDrive\Escritorio\Nuevo grupo\resources\views/admin/layout.blade.php ENDPATH**/ ?>