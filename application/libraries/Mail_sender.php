<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail_sender {
    protected $CI;

    private const LOG_HEADER = "[APP - SEND MAIL LIBRARY] ";

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function enviarCorreo(string $destinatario, string $htmlBody, string $conAsunto = "", string $adjuntarArchivoEnRuta = "") : bool {
        $paramsConexion = $this->getSenderConfig();
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_OFF;
            $mail->isSMTP();
            $mail->Host       = $paramsConexion['contacto_smtp_host'];
            $mail->SMTPAuth   = boolval($paramsConexion['contacto_smtp_es_ssl']);
            $mail->Username   = $paramsConexion['contacto_smtp_username'];
            $mail->Password   = $paramsConexion['contacto_smtp_password'];
            $mail->Port       = intval($paramsConexion['contacto_smtp_puerto']);

            //Recipients
            $mail->setFrom($paramsConexion['contacto_smtp_username'], 'Web DDS - Formulario Consultas');
            $mail->addAddress($destinatario);     // Add a recipient

            // Content
            $mail->isHTML(TRUE);
            $mail->Subject = $conAsunto;
            $mail->Body    = $htmlBody;

            // Evaluar si hay que adjuntar un archivo
            if (!empty($adjuntarArchivoEnRuta)) {
                $mail->addAttachment($adjuntarArchivoEnRuta);
            }

            log_message('info', self::LOG_HEADER . "se está enviado un correo a {$destinatario}");
            return $mail->send();

        } catch (Exception $e) {

            log_message('error',  self::LOG_HEADER . "Falló el envío de correo electrónico de contacto. Detalle: {$mail->ErrorInfo}\n{$e->getMessage()}");
            return FALSE;

        }
    }
    public function generar_mail_desde_template(string $queTemplate, array $varsReemplazo) : string {
        $this->CI->load->library('parser');

        try {
            return $this->CI->parser->parse_string($queTemplate, $varsReemplazo, TRUE);
        } catch (\Exception $e) {
            return "";
        }
    }

    private function getSenderConfig() : array {
        $this->CI->load->model('parametro');
        return $this->CI->parametro->getParametros('contacto_smtp_', TRUE);
    }


}