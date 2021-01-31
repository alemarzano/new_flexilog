<?php
function api_json_return(string $status, string $errDec, array $bodyReturn = NULL, int $statusNumber = 200) {
    $CI =& get_instance();

    $CI->output->set_content_type("application_json");
    $CI->output->set_status_header($statusNumber);
    $CI->output->set_output(json_encode(array(
        "status" => $status,
        "errDesc" => $errDec,
        "payload" => (empty($bodyReturn)) ? array() : $bodyReturn
    )));

    $CI->output->_display();
    die();
}