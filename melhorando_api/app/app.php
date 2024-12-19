<?php
    define('API_BASE', 'http://localhost/curso_api_php/melhorando_api/api/?option=');

    echo '<p>APLICAÇÃO</p>';

    $resultado = api_request('status');

    // verifica se a resposta é OK

    if($resultado['status'] == 'ERROR'){
        die('Aconteceu um erro na minha chamada à API'); 
    }

    echo '<pre>';
    print_r($resultado);

    function api_request($option){
        $client = curl_init(API_BASE . $option);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        return json_decode($response, true);
    }
?>