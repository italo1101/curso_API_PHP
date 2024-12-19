<?php

    $data['status'] = 'ERROR';
    $data['data'] = null;


    // request
    if(isset($_GET['option'])){

        switch($_GET['option']){
            case 'status':
                define_response($data, 'API running OK!...');
                break;
        }
    }else {
        $data['status'] = 'ERROR';
    }

    // Emitir a resposta da API

    response ($data);

    function define_response(&$data, $value){
        $data['status'] = 'SUCCESS';
        $data['data'] = $value;
    }

    // Construção da response
    function response($data_response){
        header("Content-Type:application/json");
        echo json_encode($data_response);
    }
?>