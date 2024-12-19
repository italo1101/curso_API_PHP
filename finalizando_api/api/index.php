<?php

    require_once('output.php');

    $data['status'] = 'ERROR';
    $data['data'] = [];


    // routes
    if(isset($_GET['option'])){

        switch($_GET['option']){
            case 'status':
                api_status($data);
                break;

            case 'random':
                api_random($data);
                break;
            case 'hash':
                api_hash($data);
                break;
                
        } 
    }else {
        $data['status'] = 'ERROR';
    }

    // Emitir a resposta da API

    response ($data);

?>