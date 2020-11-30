<?php
//podria llamarse JSONView pq muestra un json. Creo una fc gral que responde y devuelve una info (data)

/**
 * Vista para la API REST.
 * 
 * Clase comun a toda la API REST que sabe devolver
 * en formato JSON y manejar el codigo de rta HTTP.
 */
class APIView {

    function response($data, $status) {
        header("Content-Type: application/json"); 
        header("HTTP/1.1 " . $status . " " . $this->_requestStatus($status));   //setea el codigo de rta de http
        echo json_encode($data);
    }

    private function _requestStatus($code){
        $status = array(
          200 => "OK",
          404 => "Not found",
          500 => "Internal Server Error"
        );
        return (isset($status[$code])) ? $status[$code] : $status[500];
    }
}