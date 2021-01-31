<?php
function session_redirect(string $tipoMensaje, string $elMensaje, string $aURL) {
    $CI = get_instance();
    $CI->session->set_flashdata(UI_MESSAGE, $elMensaje);
    $CI->session->set_flashdata(UI_MESSAGE_TYPE, $tipoMensaje);

    redirect($aURL);
}