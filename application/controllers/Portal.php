<?php


class Portal extends CI_Controller {

    // PAGINAS DEL SITIO
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view("index");
    }
    public function articulo() {
        $this->load->view("articulo");
    }
    public function aviso_legal() {
        $this->load->view("aviso_legal");
    }
    public function conocenos() {
        $this->load->view("conocenos");
    }
    public function contacto() {
        $viewBag = array(
            "titulo" => "",
            "mensaje" => "",
            "contacto" => FALSE,
            "exitoso" => TRUE
        );

        if ($this->input->method() == "post") {
            $this->load->database();
            $this->load->model(array("contacto", "parametro"));
            $this->load->library(array("form_validation", "mail_sender"));

            if (!$this->form_validation->run("nuevoContacto")) {
                $viewBag["titulo"] = "Error en el formulario";
                $viewBag["mensaje"] = $this->form_validation->error_string();
                $viewBag["contacto"] = TRUE;
                $viewBag["exitoso"] = FALSE;
            } else {
                $this->contacto->nombre = $this->input->post("nombre", TRUE);
                $this->contacto->apellido = $this->input->post("apellido", TRUE);
                $this->contacto->empresa = $this->input->post("empresa", TRUE);
                $this->contacto->email = $this->input->post("email", TRUE);
                $this->contacto->telefono = $this->input->post("telefono", TRUE);
                $this->contacto->consulta = $this->input->post("consulta", TRUE);

                if ($this->contacto->guardar()) {
                    $viewBag["titulo"] = "Mensaje recibido";
                    $viewBag["mensaje"] = "Hemos recibido su mensaje y en breve nos estaremos poniendo en contacto con usted";

                    // enviar por correo
                    $emailDestino = $this->parametro->getParametro("contacto_destino")->valor;
                    $templateCuerpoCorreo = $this->parametro->getParametro("contacto_template")->valor;
                    $htmlBodyCorreo = $this->mail_sender->generar_mail_desde_template($templateCuerpoCorreo, array(
                        "nombre" => $this->contacto->nombre,
                        "apellido" => $this->contacto->apellido,
                        "empresa" => $this->contacto->empresa,
                        "telefono" => $this->contacto->telefono,
                        "email_contacto" => $this->contacto->email,
                        "mensaje_contacto" => $this->contacto->consulta
                    ));
                    $this->mail_sender->enviarCorreo($emailDestino, $htmlBodyCorreo, "Contacto desde la Web");

                } else {
                    $viewBag["titulo"] = "Error";
                    $viewBag["mensaje"] = "No hemos podido registrar su contacto, por favor, inténtelo nuevamente";
                    $viewBag["exitoso"] = FALSE;
                }

                $viewBag["contacto"] = TRUE;
            }

        }

        $this->load->view("contacto", $viewBag);
    }
    public function en_construccion() {
        $this->load->view("enconstruccion");
    }
    public function nosotros() {
        $this->load->view("nosotros");
    }
    public function noticias() {
        $this->load->view("noticias");
    }
    public function politicas_de_calidad() {
        $this->load->view("politicas_de_calidad");
    }
    public function soluciones() {
        $this->load->view("soluciones");
    }
    public function terminos_y_condiciones() {
        $this->load->view("terminos_y_condiciones");
    }
    public function trabajar() {
        $nombreReglasValidacion = "subidaCV";
        $viewBag = array(
            "aplico" => FALSE,
            "titulo" => "",
            "mensaje" => "",
            "correcto" => TRUE
        );

        if ($this->input->method() == "post") {
            $viewBag["aplico"] = TRUE;

            $this->load->database();
            $this->load->library(array("form_validation", "upload", "mail_sender"));
            $this->upload->initialize($this->configurarUplaodCvs());

            if ($this->form_validation->run($nombreReglasValidacion) && $this->upload->do_upload("archivoCV")) {
                $this->load->model(array("curriculum", "parametro"));
                $this->curriculum->nombre = $this->input->post("nombre", TRUE);
                $this->curriculum->apellido = $this->input->post("apellido", TRUE);
                $this->curriculum->mail = $this->input->post("mail", TRUE);
                $this->curriculum->presentacion = $this->input->post("presentacion", TRUE);
                $this->curriculum->pathArchivo = "assets/upload-cvs/" . $this->upload->data("file_name");

                if ($this->curriculum->guardar()) {
                    $viewBag["titulo"] = "Muchas gracias por acercarte";
                    $viewBag["mensaje"] = "Gracias por presentarte en Flexilog. Hemos recibido tu Curriculum y nuestro equipo de Recursos Humanos lo estará recibiendo en breve.";
                    $viewBag["correcto"] = TRUE;

                    # enviar el CV por mail
                    $mailDestino = $this->parametro->getParametro("cv_mail_destino")->valor;
                    $bodyCorreo = $this->mail_sender->generar_mail_desde_template($this->parametro->getParametro("cv_mail_template")->valor,
                        array("nombre" => $this->curriculum->nombre, "apellido" => $this->curriculum->apellido, "email_contacto" => $this->curriculum->mail, "presentacion" => $this->curriculum->presentacion));
                    $this->mail_sender->enviarCorreo($mailDestino, $bodyCorreo, "CV enviado desde la Web", FCPATH . $this->curriculum->pathArchivo);

                } else {
                    $viewBag["titulo"] = "Error al registrar su presentación";
                    $viewBag["mensaje"] = "Ha ocurrido un error al intentar registrar su presentación en el sistema. Inténtelo nuevamente.";
                    $viewBag["correcto"] = FALSE;
                }

            } else {
                $viewBag["titulo"] = "Error al registrar presentación";
                $viewBag["mensaje"] = $this->form_validation->error_string() . "<br/>" . $this->upload->display_errors();
                $viewBag["correcto"] = FALSE;
            }
        }

        $this->load->view("trabajar", $viewBag);
    }

    // PERFIL IMPOSITIVO
    public function perfil_impositivo() {
        # inicializar los modelos necesarios para la vista
        $this->load->database();
        $this->load->model(array("categoria", "archivo"));

        # listar las categorias y luego, para cada categoria, cargar los archivos que tiene asociados
        $listCategorias = $this->categoria->listar_categoria(TRUE);
        array_map(function($unaCategoria) {
            $unaCategoria->listArchivos = $this->archivo->getArchivos($unaCategoria->idCategoria, TRUE) ?? array();
        }, $listCategorias);

        # eliminar las categorias que no tengan archivos para no ensuciar la vista
        $finalArray = array();
        foreach ($listCategorias as $unaCat) {
            if (count($unaCat->listArchivos) > 0) {
                $finalArray[] = $unaCat;
            }
        }

        # configurar la información para la vista
        $viewBag = array(
            "listCategorias" => $finalArray
        );

        # mostrar la vista y enviar la información para que se renderice
        $this->load->view("perfil_impositivo", $viewBag);
    }
    public function get_file_impositivo($conId) {
        $this->load->database();
        $this->load->model(array("archivo"));
        $this->load->helper("download");

        # validar que el archivo que se quiere descargar existe
        if (empty(intval($conId)) || !$this->archivo->init(intval($conId))) {
            redirect(site_url());
        }

        # forzar la descarga del archivo
        force_download(FCPATH . $this->archivo->pathArchivo, NULL);
    }

    // ACCESO AL ADMIN
    public function login() {
        # carga la librería para activar las migraciones para que ejecute las que corresponda si hay pendientes.
        $this->load->library("migration");

        $this->load->helper("form");

        if ($this->input->method() == "get") {

            $this->load->view("backend/login");

        } else if ($this->input->method() == "post") {
            $this->load->database();
            $this->load->library(array("ion_auth"));

            # recuperar el input del formulario
            $usuario = $this->input->post("emailIngreso", TRUE);
            $clave = $this->input->post("claveIngreso", TRUE);

            # validar la identidad ingresada del usuario
            if ($this->ion_auth->login($usuario, $clave)) {
                # autenticación OK, ir al home del admin
                redirect(site_url("admin"));
            } else {
                # la autenticación falló, redirigir al login
                redirect(site_url("portal/login"));
            }
        }

    }

    // VISTAS GENERALES DEL SITIO
    public function error_404() {
        $this->load->view("404.html");
    }

    // PRIVATE HELPERS
    private function configurarUplaodCvs() : array {
        $config['upload_path'] = 'assets/upload-cvs';
        $config['allowed_types'] = array("doc", "docx", "pdf");
        $config['max_size']     = 5 * 1024;
        $config['overwrite'] = FALSE;
        $config['encrypt_name'] = FALSE;
        $config['remove_spaces'] = TRUE;

        return $config;
    }

    // SCRIPTS DE ADMINISTRACIÓN
    /**
     * Los scripts de administración son rutas que solamente pueden ser ejectuadas desde la línea de comando
     * del servidor en donde está alojada la aplicación. Cualquier intento de hacer la llamada desde la web
     * resultará en un error ya que el método no será ejecutado por cuestiones de seguridad.
     *
     * Para llamar a estos scripts se debe:
     * (1) Ingresar desde la terminal hasta la carpeta raíz del sitio
     * (2) Ejecutar el comando: php index.php [CONTROLADOR] [METODO] [PARAMS]
     *
     * El resultado se verá en la consola como cualquier otra aplicación que corre sobre la terminal.
     */
    public function reset_admin_pwd() {
        # validar que sea una llamada desde la CLI
        if (!is_cli()) {
            show_404();
        }

        # instanciar la librería de autenticación y la conexión a la BBDD
        $this->load->database();
        $this->load->library("ion_auth");

        # reconfigurar el usuario administrador
        $resetInfo = array(
            "identity" => "admin@admin.com",
            "password" => "password"
        );

        # actualizar el usuario administrador => ID = 1
        if ($this->ion_auth->update(1, $resetInfo))
            echo "El usuario administrador ha sido reinicado" . PHP_EOL;
        else
            echo "Se produjo un error al intentar reiniciar el usuario admin" . PHP_EOL;
    }
}