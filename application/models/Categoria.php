<?php


class Categoria extends CI_Model {
    private $_tabla = 'Categorias';

    public $idCategoria = 0;
    public $nombre = '';
    public $estaVisible = TRUE;

    // CREATE
    public function crear(): bool{
        $nuevaCategoria = array(
            'nombre' => $this->nombre
        );

        return $this->db->insert($this->_tabla, $nuevaCategoria);
    }
    //READ
    public function modificar_visibilidad_categoria(): bool{
        if ($this->idCategoria == 0){
            return FALSE;
        }

        $this->estaVisible = !$this->estaVisible;

        return $this->db->from($this->_tabla)->update($this->_tabla, array(
            'estaVisible' => $this->estaVisible,
        ), array(
            'idCategoria' => $this->idCategoria
        ));
    }
    public function init(int $idCategoria): bool {
        $infoConfigurar = $this->db->from($this->_tabla)->where('idCategoria', $idCategoria)->get()->row_object();

        if (is_null($infoConfigurar)){
            return FALSE;
        }else{
            $this->idCategoria = $infoConfigurar->idCategoria;
            $this->nombre = $infoConfigurar->nombre;

            return TRUE;
        }
    }
    public function listar_categoria(bool $soloLasVisibles): array {
        $this->db->from($this->_tabla)->order_by('idCategoria');

        if ($soloLasVisibles) {
            $this->db->where('estaVisible', TRUE);
        }

        return $this->db->get()->result_object();
    }
    // UPDATE
    public function modificar_categoria(): bool{
        //definimos la nueva informacion
        $nuevaInformacion = array(
            'nombre' => $this->nombre
        );

        //cargamos la nueva informacion
        return $this->db->where('idCategoria', $this->idCategoria)
            ->update($this->_tabla, $nuevaInformacion);
    }
    // DELETE
    public function eliminar_categoria(int $idCategoria): bool{
        return $this->db->delete($this->_tabla, array(
            'idCategoria' => $idCategoria
        ));
    }
}