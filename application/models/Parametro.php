<?php


class Parametro extends CI_Model {
    private $_tabla = "Parametros";

    public $idParametro = 0;
    public $nombre = "";
    public $valor = "";

    public function initFromId(int $idInit) : bool {
        # buscar el registro
        $rs = $this->db->from($this->_tabla)->where('idParametro', $idInit)->get();
        if($rs->num_rows() == 0){ return FALSE; }

        # recorrer los campos y asignar en caso que exista
        $info = $rs->row_object();
        foreach ($info as $atributo => $valor) {
            if(property_exists($this, $atributo)) {
                $this->{$atributo} = $valor;
            }
        }

        return TRUE;
    }
    public function guardar() : bool {
        $infoGuardar = $this->getPersistArray();
        $this->db->from($this->_tabla)->set($infoGuardar);
        if($this->idParametro == 0) {
            if(!$this->db->insert()) {
                return FALSE;
            }

            $this->idParametro = $this->db->insert_id();
            return TRUE;
        } else {
            return $this->db->where('idParametro', $this->idParametro)->update();
        }
    }

    public function getParametro(string $conNombre) : ? Parametro {
        return $this->db->from($this->_tabla)->where('nombre', $conNombre)->get()->custom_row_object(0, Parametro::class);
    }
    public function getParametros(string $namePatter = "", bool $asKeyValueArray = FALSE) : ? array {
        # Definir si hay que buscar según patrón
        if (!empty($namePatter)) {
            $this->db->like('nombre', $namePatter);
        }

        if(!$asKeyValueArray)  {
            return $this->db->from($this->_tabla)->get()->custom_result_object(Parametro::class);
        } else {
            $arrayParams = $this->db->from($this->_tabla)->get()->custom_result_object(Parametro::class);
            $arrayReturn = array();

            foreach ($arrayParams as $unParametro) {
                $arrayReturn[$unParametro->nombre] = $unParametro->valor;
            }

            return $arrayReturn;
        }
    }

    public function guardar_banner(): bool {
        if(!$this->db->from($this->_tabla)->where('idParametro', $this->idParametro)->update()){
            return false;
        }
        return true;
    }

    private function getPersistArray() : array {
        $arrayReturn = array();
        $listEvitar = array('idParametro');

        // obtener las propiedades públicas del objeto
        $objectReflector = new ReflectionObject($this);
        $listProps = $objectReflector->getProperties(ReflectionProperty::IS_PUBLIC);

        // preparar el array para persistir
        foreach ($listProps as $prop) {
            if(!in_array($prop->getName(), $listEvitar)) {
                $arrayReturn[$prop->getName()] = $prop->getValue($this);
            }
        }

        return $arrayReturn;
    }


}