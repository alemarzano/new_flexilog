<?php


class Curriculum extends CI_Model {
    private $_tabla = "Curriculums";

    public $idCurriculum = 0;
    public $nombre = "";
    public $apellido = "";
    public $mail = "";
    public $presentacion = "";
    public $pathArchivo = "";


    public function guardar() : bool {
        $arrayGuardar = array(
            "nombre" => $this->nombre,
            "apellido" => $this->apellido,
            "mail" => $this->mail,
            "presentacion" => $this->presentacion,
            "pathArchivo" => $this->pathArchivo
        );

        if ($this->idCurriculum == 0) {
            if (!$this->db->insert($this->_tabla, $arrayGuardar)) {
                return FALSE;
            }

            $this->idCurriculum = $this->db->insert_id();
            return TRUE;
        } else {
            return $this->db->update($this->_tabla, $arrayGuardar, array("idCurriculum" => $this->idCurriculum));
        }
    }
}