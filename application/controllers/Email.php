<?php


class Email extends CI_Controller {
    function send_email(){
        #Importando la libreria
        $this->load->library('email');

        #Configurando el correo
        $this->email->from('jose@encender.com', 'José');
        $this->email->to('andres@encender.com.ar');
        $this->email->subject('Segundo intento');
        $this->email->message('Recien intentando');

        #Mandar el correo
        if($this->email->send()){
            echo "El correo fue enviado correctamente";
        }else{
            echo "Hubo un error al enviar el correo";
        }
    }


}