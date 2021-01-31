<?php


class Archivo extends CI_Model {
    private $_tabla = 'Archivos';
    private $megasPermitidos = 0;

    public $idArchivo = 0;
    public $fechaCarga;
    public $descripcion = "";
    public $pathArchivo = "";
    public $categoria = 0;
    public $ultimaFechaModificacion;
    public $usuarioUltimaModificacion = 0;
    public $estaActivo = TRUE;

    // CREATE
    public function crear(): bool {
        $nuevoArchivo = array(
          'fechaCarga' => $this->fechaCarga,
          'pathArchivo' => $this->pathArchivo,
          'descripcion' => $this->descripcion,
          'categoria' => $this->categoria,
          'ultimaFechaModificacion' => $this->ultimaFechaModificacion,
          'usuarioUltimaModificacion' => $this->usuarioUltimaModificacion,
          'estaActivo' => $this->estaActivo
        );
        return $this->db->insert($this->_tabla, $nuevoArchivo);
    }
    public function upload_archivo() : bool {
        $config['upload_path'] = PATH_UPLOAD_ARCHIVOS;
        $config['allowed_types'] = 'pdf|doc|docx|xls|xlsx';
        $config['max_size'] = 1024*$this->megasPermitidos;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('archivo')){
            return FALSE;
        }else{
            return $this->upload->data('file_name');
        }
    }
    // READ
    public function modificar_visibilidad(): bool{
        if ($this->idArchivo == 0){
            return FALSE;
        }

        $this->estaActivo = !$this->estaActivo;
        return $this->db->from($this->_tabla)->update($this->_tabla, array(
            'estaActivo' => $this->estaActivo,
        ), array(
            'idArchivo' => $this->idArchivo
        ));
    }
    public function init(int $idArchivo): bool {
        $infoConfigurar = $this->db->from($this->_tabla)->where('idArchivo', $idArchivo)->get()->row_object();

        if (is_null($infoConfigurar)) {
            return FALSE;
        } else {
            $this->idArchivo = $infoConfigurar->idArchivo;
            $this->fechaCarga = $infoConfigurar->fechaCarga;
            $this->descripcion = $infoConfigurar->descripcion;
            $this->categoria = $infoConfigurar->categoria;
            $this->ultimaFechaModificacion = $infoConfigurar->ultimaFechaModificacion;
            $this->usuarioUltimaModificacion = $infoConfigurar->usuarioUltimaModificacion;
            $this->pathArchivo = $infoConfigurar->pathArchivo;
            $this->estaActivo = boolval($infoConfigurar->estaActivo);

            return TRUE;
        }
    }
    // UPDATE
    public function actualizar_archivo(): bool{

        $nuevaInformacion = array(
            'fechaCarga' => $this->fechaCarga,
            'categoria' => $this->categoria,
            'ultimaFechaModificacion' => $this->ultimaFechaModificacion,
            'usuarioUltimaModificacion' => $this->usuarioUltimaModificacion,
            'estaActivo' => $this->estaActivo
        );

       /* return $this->db->set($nuevaInformacion)->where('idArchivo', $this->idArchivo)
            ->update($this->_tabla);
       */
       echo $this->db->where('idArchivo', $this->idArchivo)
           ->update($this->_tabla, $nuevaInformacion);
    }
    // DELETE
    public function eliminar(int $idArchivo): bool {
       return $this->db->delete('Archivos', array('idArchivo' => $idArchivo));
    }
    public function eliminarArchivoPrevio(string $enPath) {
        @unlink($enPath);
    }

    // LISTADOS
    public function getArchivos(int $paraCategoriaConId, bool $soloVisibles = FALSE) : ? array {
        if ($soloVisibles) {
            $this->db->where("estaActivo", TRUE);
        }

        return $this->db->from($this->_tabla)->where("categoria", $paraCategoriaConId)->get()->result_object();
    }
}