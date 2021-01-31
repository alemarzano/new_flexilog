<?php

/**
 * Fecha:   20.07.2020
 * Autor:   Andrés Hume
 * Descripción:
 * Esta migración se ocupa de generar las tablas correspondientes al framework de autenticación
 * Ion_Auth. Además inserta los primeros registros que son necesarios para que el framwork de
 * autenticación funcione correctamente.
 *
 * Class Migrations_Ion_auth_backend
 */

class Migration_Descripcion_Archivo extends CI_Migration {

    public function up() {
        $this->load->dbforge();

        # definición del campo descripcion
        $nuevoCampo = array(
            "descripcion" => array(
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => FALSE
            )
        );

        $this->dbforge->add_column("Archivos", $nuevoCampo);
    }

    public function down() {

    }
}


