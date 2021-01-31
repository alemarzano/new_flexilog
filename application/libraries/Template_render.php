<?php

class Template_render {
    protected $CI;
    protected $viewPrefix = "backend/";

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('parser');
    }

    public function render_pagina($tituloPagina = "", $subtituloPagina = "", $partialViewFile, $viewInfo = NULL, $extraScripts = NULL) {
        $arrayCompleto = array();

        # Preparar los elementos del template
        $arrayCompleto['titulo_sitio'] = $tituloPagina;
        $arrayCompleto['subtitulo_sitio'] = $subtituloPagina;
        $arrayCompleto['partial_view_content'] = $this->CI->load->view($this->viewPrefix . 'partial_views/' . $partialViewFile, $viewInfo, TRUE);
        $arrayCompleto['breadcrumbs'] = $this->getBreadCrumbs();
        $arrayCompleto[UI_MESSAGE] = $this->CI->session->flashdata(UI_MESSAGE) ?? "";
        $arrayCompleto[UI_MESSAGE_TYPE] = $this->CI->session->flashdata(UI_MESSAGE_TYPE) ?? "";

        # Revisar si hay que adjuntar una app
        if(file_exists(FCPATH . "assets/js/apps/${partialViewFile}.js")){
            $arrayCompleto['scripts_adicionales'] = $this->generarScriptTag(base_url() . "assets/js/apps/${partialViewFile}.js");
        } else {
            $arrayCompleto['scripts_adicionales'] = "";
        }

        # Validar si hay que agregar scripts
        if(!empty($extraScripts) && is_array($extraScripts)) {
            foreach ($extraScripts as $scriptAdicional) {
                $arrayCompleto['scripts_adicionales'] .= $this->generarScriptTag($scriptAdicional);
            }
        }

        $this->CI->parser->parse($this->viewPrefix . 'blank.tpl.php', $arrayCompleto);

    }

    private function generarScriptTag($urlPathScript)  {
        return "<script src='${urlPathScript}'></script>";
    }
    private function getBreadCrumbs() {
        $ruta = explode("/", uri_string());
        $returnString = "";

        $total = count($ruta);
        $actual = 1;
        foreach ($ruta as $index => $link) {
            if ($actual == $total) { break; }
            $returnString .= "<li>";
            $returnString .= ($index == 0) ? "<i class=\"fa fa-home\"></i> " : "";
            $returnString .= ucwords($link, " \t\r\n\f\v\-") . "</li>";
            $actual++;
        }

        return $returnString;
    }
}
