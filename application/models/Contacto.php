<?php


class Contacto extends CI_Model {
    private $_tabla = "Contactos";

    public $idContacto = 0;
    public $nombre = "";
    public $apellido = "";
    public $empresa = "";
    public $email = "";
    public $telefono = "";
    public $consulta = "";
    public $visto = FALSE;

    public function guardar() {
        $arrayGuardar = array(
            "nombre" => $this->nombre,
            "apellido" => $this->apellido,
            "empresa" => $this->empresa,
            "email" => $this->email,
            "telefono" => $this->telefono,
            "consulta" => $this->consulta,
            "visto" => $this->visto
        );

        if ($this->idContacto == 0) {
            if (!$this->db->insert($this->_tabla, $arrayGuardar)) {
                return FALSE;
            }

            $this->idContacto = $this->db->insert_id();
            return TRUE;
        } else {
            return $this->db->update($this->_tabla, $arrayGuardar, array("idConsulta", $this->idContacto));
        }
    }
}