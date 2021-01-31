<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library(array("ion_auth", "template_render"));
        $this->load->helper(array("form", "session_redirect"));

        if (!$this->ion_auth->logged_in()) {
            redirect(site_url("portal/login"));
        }
    }

    public function index() {
        $this->load->model(array("archivo", "categoria"));

        # armar el listado de categorias
        $listCategorias = $this->categoria->listar_categoria(FALSE);

        # para cada categoria del listado, asociarle el listado de archivos
        array_map(function($unaCategoria) {
            $unaCategoria->listArchivos = $this->archivo->getArchivos($unaCategoria->idCategoria) ?? array();
        }, $listCategorias);

        # armar la info para la vista
        $viewBag = array(
            "listCategorias" => $listCategorias
        );

        # render de la vista
        $this->template_render->render_pagina("Home", "admin", "home-categorias", $viewBag);
    }
    public function logout() {
        $this->ion_auth->logout();
        redirect(site_url());
    }
    public function modificar_datos_acceso() {
        # cargar la información del usuario
        $viewBag = array(
            "infoUsuario" => $this->ion_auth->user()->row()
        );

        $this->template_render->render_pagina("Accesos", "modificar datos", "modificar-acceso", $viewBag);
    }
    public function exec_change_password() {
        # recuperar las dos claves para validar
        $identidadUsr = $this->input->post("email", TRUE);
        $password1 = $this->input->post("clave1", TRUE);
        $password2 = $this->input->post("clave2", TRUE);
        if ($password1 != $password2) {
            session_redirect(UI_MESSAGE_ERROR, "Las claves proporcionadas no coinciden", site_url("admin/modificar-datos-accceso"));
        }

        # validar que haya una dirección de email
        $this->load->library("form_validation");
        $this->form_validation->set_rules("email", "Email de acceso", "trim|required|valid_email");
        if (!$this->form_validation->run()) {
            session_redirect(UI_MESSAGE_ERROR, "Error al intentar modificar los datos de acceso.<br/>{$this->ion_auth->errors()}", site_url("admin/modificar-datos-acceso"));
        }

        # recuperar el id y modificar el password
        $idUsuarioModificar = $this->ion_auth->user()->row()->id;
        $dataActualizar = array("password" => $password1, "email" => $identidadUsr);

        # ejecutar la actualización del password y mail de acceso
        if ($this->ion_auth->update($idUsuarioModificar, $dataActualizar)) {
            session_redirect(UI_MESSAGE_OK, "Los datos fueron modificados con éxito", site_url("admin"));
        } else {
            session_redirect(UI_MESSAGE_ERROR, "No pudieron modificarse los datos de acceso al backend de administración<br/>{$this->ion_auth->errors()}", site_url("admin/modificar-datos-acceso"));
        }
    }

    // CRUD CATEGORIAS
    public function alta_categoria(){
        $this->load->model('categoria');
        $this->load->library(array('form_validation'));

        // validando el formulario del input
        if (!$this->form_validation->run('nuevaCategoria')){
            session_redirect(UI_MESSAGE_ERROR, $this->form_validation->error_string(), site_url("admin"));
        } else {
            //definir donde se van a guardar los datos
            $this->categoria->nombre = $this->input->post('nombreCategoria', TRUE);

            //comprobar si se pudo crear la categoria
            if ($this->categoria->crear()){
                session_redirect(UI_MESSAGE_OK, "La categoria {$this->categoria->nombre} ha sido creada", site_url("admin"));
            }else{
                session_redirect(UI_MESSAGE_ERROR, "Se produjo un error al intentar registrar la categoria", site_url("admin"));
            }
        }
    }
    public function modificar_visibilidad_categoria(){
        //recuperar el ID
        $idAModificar = intval($this->input->post('idCategoria', TRUE));

        // verificar que el id no este vacio
        if (empty($idAModificar)){
            echo json_encode(array(
                'status' => 'KO',
                'errDesc' => 'No se encontro una categoria valida para modificar'
            ));
            die();
        }

        if (!$this->categoria->init($idAModificar)){
            echo json_encode(array(
                'status' => 'KO',
                'errDesc' => 'La categoria que intenta modificar no existe'
            ));

            die();
        }
        //verificar si se pudo modificar la visibilidad de la categoria
        if ($this->categoria->modificar_visibilidad_categoria()){
            echo json_encode(array(
                'status' => 'OK',
                'errDesc' => ''
            ));
        }else{
            echo json_encode(array(
                'status' => 'KO',
                'errDesc' => 'No se pudo modificar la visibilidad de la categoria'
            ));
        }
    }
    public function modificar_categoria(){
        // recuperar el ID
        $idAModificar = intval($this->input->post('pk', TRUE));

        // validar el ID
        if ($idAModificar == 0){
            echo json_encode(array(
                'status' => 'KO',
                'errDesc' => 'El ID no es valido'
            ));
        }

        // inicializar la categoria a editar
        $this->load->model("categoria");
        if (!$this->categoria->init($idAModificar)) {
            api_json_return("KO", "La categoria no existe");
        }

        // si se pudo inicializar, modificar el nombre
        $this->categoria->nombre = $this->input->post('value', TRUE);

        // guardar los cambios
        if ($this->categoria->modificar_categoria()){
            echo json_encode(array(
                'status' => 'OK',
                'errDesc' => ''
            ));
        }else{
            echo json_encode(array(
                'status' => 'KO',
                'errDesc' => 'Se produjo un error al modificar la categoria'
            ));
        }
    }
    public function eliminar_categoria(){
        // Cargar el modelo
        $this->load->model('categoria');
        // Recuperar el ID a eliminar
        $idCategoria = intval($this->input->post('idCategoria', TRUE));

        // Validar el ID
        if ($idCategoria == 0){
            session_redirect(UI_MESSAGE_ERROR, 'El id seleccionado no es valido', site_url('admin'));
        }

        // Recuperar el nombre de la Categoria
        if(!$this->categoria->init(intval($idCategoria))){
            session_redirect(UI_MESSAGE_ERROR, 'No se pudo recuperar la informacion de la categoria', site_url('admin'));
        }

        if ($this->categoria->eliminar_categoria($idCategoria)){
            session_redirect(UI_MESSAGE_OK, 'Se a eliminado correctamente la categoria', site_url('admin'));
        }else{
            session_redirect(UI_MESSAGE_ERROR, 'Se produjo un error al eliminar la categoria', site_url('admin'));
        }
    }

    // CRUD ARCHIVOS
    public function alta_archivo() {
        $this->load->model('archivo');

        # validar que haya una descripción del archivo
        if (empty($this->input->post("nuevaDescripcion", TRUE))) {
            session_redirect(UI_MESSAGE_ERROR, "Debe ingresar una descripción del archivo que intenta subir", site_url("admin"));
        }

        # intentar subir el archivo y si falla redireccionar al home mostrando los errores
        if (!$this->upload_archivo("nuevoArchivo")) {
            session_redirect(UI_MESSAGE_ERROR, $this->upload->display_errors(), site_url("admin"));
        }

        // definir el path de los datos
        $this->archivo->fechaCarga = date("Y-m-d H:i:s");
        $this->archivo->categoria = intval($this->input->post('idCategoria', TRUE));
        $this->archivo->descripcion = $this->input->post("nuevaDescripcion", TRUE);
        $this->archivo->pathArchivo = PATH_UPLOAD_ARCHIVOS . $this->upload->data("file_name");
        $this->archivo->ultimaFechaModificacion = NULL;
        $this->archivo->usuarioUltimaModificacion = $this->ion_auth->user()->row()->id;
        $this->archivo->estaActivo = TRUE;

        // comprobar si logro crear el archivo
        if ($this->archivo->crear()) {
            session_redirect(UI_MESSAGE_OK, "El archivo ha sido cargado correctamente", site_url("admin"));
        } else {
            session_redirect(UI_MESSAGE_ERROR, "Se produjo un error al registrar el nuevo archivo", site_url("admin"));
        }
    }
    public function modificar_visibilidad_archivo() {
        // cargar modelo y librerias necesarias
        $this->load->model('archivo');

        //recuperar el ID
        $idAModificar = intval($this->input->post('idArchivo', TRUE));

        // validar el ID y verificar que no este vacio
        if (empty($idAModificar) || !$this->archivo->init($idAModificar)) {
            session_redirect(UI_MESSAGE_ERROR, "No encontramos el archivo que quiere modificar", site_url("admin"));
        }

        //intentar modificar la visibilidad
        if ($this->archivo->modificar_visibilidad()) {
            session_redirect(UI_MESSAGE_OK, "Se ha modificado la visibilidad del archivo seleccionado", site_url("admin"));
        } else {
            session_redirect(UI_MESSAGE_ERROR, "No se ha podido modificar la visibilidad del archivo seleccionado", site_url("admin"));
        }
    }
    public function modificar_archivo() {
        // cargar modelo y librerias necesarias
        $this->load->model('archivo');
        //recuperar el ID
        $idAModificar = intval($this->input->post('idArchivo', TRUE));
        //validar el ID
        if ($idAModificar == 0) {
            echo json_encode(array(
                'status' => 'KO',
                'errDesc' => 'El ID ingresado es invalido'
            ));
        }
        if (!$this->archivo->init($idAModificar)) {
            echo json_encode(array(
                'status' => 'KO',
                'errDesc' => 'El archivo que intenta modificar no existe'
            ));

            die();
        }
        //definir la ruta de los datos
        $this->archivo->fechaCarga = $this->input->post('fechaCarga', TRUE);
        $this->archivo->categoria = $this->input->post('categoria', TRUE);
        $this->archivo->ultimaFechaModificacion = $this->input->post('ultimaFechaModificacion', TRUE);
        $this->archivo->usuarioUltimaModificacion = $this->input->post('usuarioUltimaModificacion', TRUE);
        $this->archivo->estaActivo = $this->input->post('estaActivo', TRUE);

        //guardar los datos en la BDD
        if ($this->archivo->actualizar_archivo()){
            echo json_encode(array(
                'status' => 'OK',
                'errDesc' => '',
            ));
        }else{
            echo json_encode(array(
                'status' => 'KO',
                'errDesc' => 'No se pudo actualizar el archivo'
            ));
        }
    }
    public function eliminar_archivo(){
        // Cargar el modelo y las librerias necesarias
        $this->load->model('archivo');
        // Recuperar el ID que se va a eliminar
        $idArchivo = intval($this->input->post('idArchivo', TRUE));

        // Validar el ID
        if ($idArchivo == 0){
           session_redirect(UI_MESSAGE_ERROR, 'El id seleccionado no es valido', site_url('admin'));
        }

        // Recuperar la informacion del Archivo
        if(!$this->archivo->init(intval($idArchivo))){
            session_redirect(UI_MESSAGE_ERROR,'No se pudo recuperar los datos del archivo', site_url('admin'));
        }

        // Borrar el archivo del servidor
        if(!empty($this->archivo->pathArchivo)){
            $enPath = FCPATH . $this->archivo->pathArchivo;
            $this->archivo->eliminarArchivoPrevio($enPath);
        }

        // Eliminar el archivo
        if ($this->archivo->eliminar($idArchivo)){
            session_redirect(UI_MESSAGE_OK, 'Se elimino correctamente el archivo', site_url('admin'));
        }else{
            session_redirect(UI_MESSAGE_ERROR, 'Se produjo un error al eliminar el archivo', site_url('admin'));
        }
    }
    public function descargar_archivo($conId) {
        $this->load->model(array("archivo"));
        $this->load->helper("download");

        # validar que el archivo que se quiere descargar existe
        if (empty(intval($conId)) || !$this->archivo->init(intval($conId))) {
            session_redirect(UI_MESSAGE_ERROR, "El archivo que desea descargar no existe", site_url("admin"));
        }

        # forzar la descarga del archivo
        force_download(FCPATH . $this->archivo->pathArchivo, NULL);
    }


    // PRIVATE HELPERS
    private function upload_archivo(string $enCampoConNombre) : ? bool {
        # establecer la configuración estandar de subida
        $config['upload_path'] = PATH_UPLOAD_ARCHIVOS;
        $config['allowed_types'] = 'gif|jpg|png|doc|docx|xls|xlsx|pdf|zip|rar';
        $config['max_size']     =  15*1024;
        $config['overwrite'] = FALSE;
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;

        # inicializar la carga
        $this->load->library("upload", $config);

        # intentar subir el archivo y devolver el resultado
        return $this->upload->do_upload($enCampoConNombre);
    }

    public function migration_test() {
        $this->load->library("migration");
        echo $this->migration->current();
    }
}