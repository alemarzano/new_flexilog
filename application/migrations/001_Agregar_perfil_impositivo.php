<?php

/**
 * Class Agregar_perfil_impositivo
 *
 * Fecha:   20.07.2020
 * Autor:   Andrés Hume
 *
 * Descripción
 * Migración responsable de generar las tablas necesarias para subir los archivos
 * que corresponden a la nueva funcionalidad de exponer archivos del perfil imposi_
 * tivo de Flexilog
 *
 */
class Migration_Agregar_perfil_impositivo extends CI_Migration {

    public function up() {
        # cargar la librería para trabjar con la base de datos
        $this->load->database();
        $this->load->dbforge();

        # crear la tabla de Categorias de Archivos
        $camposCategorias = array(
            "idCategoria" => array(
                "type" => "int",
                "constraint" => 9,
                "auto_increment" => TRUE
            ),
            "nombre" => array(
                "type" => "VARCHAR",
                "constraint" => 255,
                "unique" => TRUE
            ),
            "estaVisible" => array(
                "type" => "tinyint",
                "default" => 1
            )
        );
        $this->dbforge
            ->add_field($camposCategorias)
            ->add_key("idCategoria", TRUE)
            ->create_table("Categorias", TRUE, array("COLLATE" => "utf8_spanish2_ci"));


        # crear la tabla de archivos
        $camposArchivos = array(
            "idArchivo" => array(
                "type" => "int",
                "constraint" => 9,
                "auto_increment", TRUE
            ),
            "fechaCarga" => array(
                "type" => "datetime",
                "null" => FALSE
            ),
            "pathArchivo" => array(
                "type" => "VARCHAR",
                "constraint" => 2000,
                "null" => FALSE
            ),
            "categoria" => array(
                "type" => "int",
                "constraint" => 9,
                "null" => FALSE
            ),
            "ultimaFechaModificacion" => array(
                "type" => "datetime",
                "null" => TRUE
            ),
            "estaActivo" => array(
                "type" => "tinyint",
                "default" => 1,
                "null" => FALSE
            )
        );
        $this->dbforge
            ->add_field($camposArchivos)
            ->add_key("idArchivo", TRUE)
            ->create_table("Archivos", TRUE, array("COLLATE" => "utf8_spanish2_ci"));

    }

    public function down() {
        $this->load->dbforge();
        $this->dbforge->drop_table("Categorias");
        $this->dbforge->drop_table("Archivos");
    }

}