<!DOCTYPE html>
<html>
<head>
    <title>{titulo_sitio} : <?= GLOBAL_CLIENTE ?></title>
    <?php require_once APPPATH . "views/backend/shared/head.php"; ?>
    <?php require_once APPPATH . "views/backend/shared/scripts.php"; ?>
    <style type="text/css">
        /* Estilos para contener los botones de acción en los dropdowns */
        .dropdown-menu>li>form {
            clear: both;
            font-weight: 400;
            line-height: 1.42857143;
            color: #333;
            white-space: nowrap;
        }
        .dropdown-menu>li>form>a:hover {
            color: #262626;
            text-decoration: none;
            background-color: #f5f5f5;
        }
        .dropdown-menu>li>form>a {
            color: #555;
            padding: 3px 20px;
            display: block;
        }
        .dropdown-menu>li>form>a>.fa {
            margin-right: 10px;
        }

        /* Corrección style swal2 */
        .swal2-popup {
            font-size: 1.6rem !important;
        }
    </style>
</head>

<body class="hold-transition skin-purple-light sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <?php require_once APPPATH . "views/backend/shared/nav_head.php" ?>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <?php require_once APPPATH . "views/backend/shared/nav_sidebar.php" ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {titulo_sitio}
                <small>{subtitulo_sitio}</small>
            </h1>
            <ol class="breadcrumb">
                {breadcrumbs}
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php require_once APPPATH . "views/backend/shared/inc-alert-row.php"; ?>
            {partial_view_content}

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php require_once APPPATH . "views/backend/shared/footer.php"; ?>

    <!-- Control Sidebar -->
    <?php # require_once APPPATH . "views/backend/shared/right_sidebar.php"; ?>
    <!-- /.control-sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
{scripts_adicionales}
</body>
</html>
