 <?php

    // resposta temporaria

    header("Content-Type:application/json");

    $data['status'] = 'SUCCESS';
    $data['method'] = $_SERVER['REQUEST_METHOD'];

    

    echo json_encode($data);

 ?>