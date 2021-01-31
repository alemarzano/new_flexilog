<?php ?>

<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <i class="fa fa-user-circle-o"></i> Modificar datos de acceso
                </h3>
            </div>
            <div class="box-body">
                <?= form_open(site_url("admin/exec-change-password"), array("method" => "post")) ?>
                    <div class="form-group">
                        <label for="email">Email de acceso</label>
                        <input type="text" class="form-control" name="email" placeholder="" value="<?= $infoUsuario->email ?>">
                    </div>
                    <div class="form-group">
                        <label for="clave1">Nuevo password</label>
                        <input type="password" class="form-control" name="clave1" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="clave2">Repetir password</label>
                        <input type="password" class="form-control" name="clave2" placeholder="" value="">
                    </div>
                <?= form_close() ?>
            </div>
            <div class="box-footer">
                <button class="btn btn-warning pull-right" onclick="iniciarCambioCredenciales();">
                    <i class="fa fa-check-circle-o"></i> Modificar credenciales de acceso
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function iniciarCambioCredenciales() {
        var clave = $('input[name="clave1"]').val();
        var repetirClave = $('input[name="clave2"]').val();
        var emailAcceso = $('input[name="email"]').val();

        // validar que haya información para commitear
        if ((!emailAcceso || emailAcceso.length == 0 || clave.length == 0 || repetirClave.length == 0) || (clave != repetirClave)) {
            swal.fire('Revise los datos', 'La información ingresada no es válida. Verifique que haya ingresado un email válido y que las claves coincidan', 'warning');
            return;
        }

        // hacer submit del formulario
        $('.box-body form').submit();
    }
</script>