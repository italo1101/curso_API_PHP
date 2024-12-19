<?php
    define('API_BASE', 'http://localhost/curso_api_php/pedidos_explicitos_api/api/?option=');

    echo '<p>APLICAÇÃO</p>';

    
    for($i=0; $i<10; $i++){
        
        $resultado = api_request('random&min=100&max=200');

        // verifica se a resposta é OK
        if($resultado['status'] == 'ERROR'){
            die('Aconteceu um erro na minha chamada à API'); 
        }

        echo "O valor randômico " . $resultado['data'] . "<br>"; 
    }

    echo 'TERMINADO';

    function api_request($option){
        $client = curl_init(API_BASE . $option);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        return json_decode($response, true);
    }
?>