<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!--li class="header">NIVEL</li-->
            <li>
                <a href="<?= site_url(array('admin')) ?>">
                    <i class="fa fa-archive"></i>
                    <span>Archivos</span>
                </a>
            </li>
            <li>
                <a href="<?= site_url(array('admin/modificar-datos-acceso')) ?>">
                    <i class="fa fa-user-secret"></i>
                    <span>Modificar acceso</span>
                </a>
            </li>
            <li class="header"></li>
            <li>
                <a href="<?= site_url("admin/logout") ?>">
                    <i class="fa fa-arrow-left"></i> <span>Cerrar Sesión</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>