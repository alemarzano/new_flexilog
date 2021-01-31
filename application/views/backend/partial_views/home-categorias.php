<?php
/**
 * @var array $listCategorias
 * @var Categoria $unaCategoria
 * @var Archivo $unArchivo
 */
?>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"></h3>
        <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal_nuevaCategoria">
            <i class="fa fa-plus"></i> Nueva categoria
        </a>
    </div>
    <div class="box-body">
        <ul class="nav nav-pills nav-stacked col-sm-2 col-md-2">
            <?php
            // armar las pills de navegación con el listado de las categorias
            $loopPrimera = TRUE;
            foreach ($listCategorias as $unaCategoria):
                ?>
                <li class="<?= $loopPrimera ? "active" : "" ?>">
                    <a href="<?= "#tabCategoria_" . $unaCategoria->idCategoria ?>" data-toggle="pill"><?= $unaCategoria->nombre ?></a>
                </li>
                <?php
                $loopPrimera = FALSE;
            endforeach;
            ?>
        </ul>
        <div class="tab-content col-sm-10 col-md-10">
            <?php
            // armar los cuerpos de las tabs con los archivos
            $loopPrimera = TRUE;
            foreach ($listCategorias as $unaCategoria):
                ?>
                <div class="tab-pane <?= $loopPrimera ? "active" : "" ?>" id="<?= 'tabCategoria_' . $unaCategoria->idCategoria ?>">
                    <h4><span class="titulo-categoria-editable" data-pk="<?= $unaCategoria->idCategoria ?>" data-url="<?= site_url('admin/modificar_categoria') ?>"><?= $unaCategoria->nombre?> (archivos en el sitio)</span></h4>
                    <div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Fecha creación</th>
                                    <th>Nombre del archivo</th>
                                    <th class="text-center">Última modificación</th>
                                    <th class="text-center">Status</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($unaCategoria->listArchivos as $unArchivo): ?>
                                    <tr>
                                        <td><?= $unArchivo->fechaCarga ?></td>
                                        <td><?= $unArchivo->descripcion ?></td>
                                        <td class="text-center"><?= $unArchivo->ultimaFechaModificacion ?? "N/A" ?></td>
                                        <td class="text-center">
                                            <span class="label label-<?= $unArchivo->estaActivo ? "success" : "default" ?>"><?= $unArchivo->estaActivo ? "Visible" : "Oculto" ?></span>
                                        </td>
                                        <td>
                                            <div class="dropdown pull-right">
                                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                    <i class="fa fa-bars"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                    <li>
                                                        <?= form_open(site_url("admin/modificar_visibilidad_archivo"), array("method" => "post"), array("idArchivo" => $unArchivo->idArchivo)) ?>
                                                            <a href="#" onclick="$(this).parent('form').submit();">
                                                                <i class="fa fa-arrow-<?= $unArchivo->estaActivo ? "down" : "up" ?>"></i> <?= $unArchivo->estaActivo ? "Ocultar archivo" : "Mostrar archivo" ?>
                                                            </a>
                                                        <?= form_close() ?>
                                                    </li>
                                                    <li>
                                                        <a href="<?= site_url("admin/descargar_archivo/" . $unArchivo->idArchivo) ?>"><i class="fa fa-cloud-download"></i> Descargar archivo</a>
                                                    </li>
                                                    <li role="separator" class="divider"></li>
                                                    <li>
                                                        <?= form_open(site_url('admin/eliminar_archivo'), array('method' => 'post'), array('idArchivo' => $unArchivo->idArchivo)) ?>
                                                        <a href="#" onclick="$(this).parent('form').submit();">
                                                            <i class="fa fa-trash-o"></i> Eliminar archivo
                                                        </a>
                                                        <?= form_close()?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <a href="#" onclick="initUploadArchivo(<?= $unaCategoria->idCategoria ?>)" class="btn btn-default pull-right">
                            <i class="fa fa-cloud-upload"></i> Subir nuevo archivo
                        </a>
                        <?= form_open(site_url('admin/eliminar_categoria'), array('method' => 'post'), array('idCategoria' => $unaCategoria->idCategoria))?>
                        <a href="#" class="btn-eliminar-categoria">
                            <i class="fa fa-trash-o"></i> Eliminar categoria '<?= $unaCategoria->nombre?>'
                        </a>
                        <?= form_close()?>
                    </div>
                </div>
                <?php
                $loopPrimera = FALSE;
            endforeach;
            ?>
        </div><!-- tab content -->
    </div>
</div>


<!-- MODAL NUEVA CATEGORIA -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_nuevaCategoria">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nueva Categoria de Archivos</h4>
            </div>
            <div class="modal-body">
                <?= form_open("admin/alta-categoria", array("method" => "post", "id" => "formNuevaCategoria")) ?>
                <div class="form-group">
                    <label for="nombreCategoria">Nombre categoria</label>
                    <input type="text" class="form-control" name="nombreCategoria" placeholder="" value="">
                </div>
                <?= form_close() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#formNuevaCategoria').submit();">Crear Categoria</button>
            </div>
        </div>
    </div>
</div>
<!-- / MODAL NUEVA CATEGORIA -->
<!-- MODAL NUEVO ARCHIVO -->
<div class="modal fade" tabindex="-1" role="dialog" id="modal_NuevoArchivo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Agregar un archivo</h4>
            </div>
            <div class="modal-body">
                <?= form_open_multipart(site_url("admin/alta-archivo"), array("method" => "post", "id" => "formUploadNuevoArchivo"), array("idCategoria" => "0")) ?>
                    <div class="form-group">
                        <label for="nuevaDescripcion">Descripción del archivo</label>
                        <input type="text" class="form-control" name="nuevaDescripcion" placeholder="" value="">
                    </div>
                    <div class="form-group">
                        <label for="nuevoArchivo">Seleccionar archivo</label>
                        <input type="file" class="form-control" name="nuevoArchivo" placeholder="" value="">
                    </div>
                <?= form_close() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" onclick="$('#formUploadNuevoArchivo').submit();">
                    <i class="fa fa-cloud-upload"></i> Subir archivo
                </button>
            </div>
        </div>
    </div>
</div>
<!-- / MODAL NUEVO ARCHIVO -->

<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script>
    function initUploadArchivo(paraCategoria) {
        var modalId = "#modal_NuevoArchivo";
        var idFormUpload = '#formUploadNuevoArchivo';
        var hiddenCatId = 'input[type="hidden"][name="idCategoria"]';

        $(idFormUpload).children(hiddenCatId).val(paraCategoria);
        $(modalId).modal('show');
    }

    $(document).ready(function() {
        $('h4 > span.titulo-categoria-editable').editable({
            "mode": "inline",
            "emptytext": "Categoria sin nombre"
        });
    });

    // handle evento eliminar categoria
    $('a.btn-eliminar-categoria').on('click', function(e) {
        var formularioASubmit = $(this).parent("form");

        swal.fire({
            type: 'warning',
            title: 'Eliminar categoria',
            text: 'Confirme que desea eliminar la categoria de archivos',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            confirmButtonText: 'Sí, eliminar',
            reverseButtons: true,
            confirmButtonColor: 'orange'
        }).then((resultado) => {
            if (resultado.value) {
                $(formularioASubmit).submit();
            }
        })
    });
</script>