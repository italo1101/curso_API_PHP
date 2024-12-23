 <?php

    // resposta temporaria

   header("Content-Type:application/json");

   $data['status'] = 'SUCCESS';
   $data['method'] = $_SERVER['REQUEST_METHOD'];

   if($data['method'] == 'GET'){
      $data['data'] = $_GET;
   }else if($data['method'] == 'POST'){
      $data['data'] = $_post;
   }
   
   echo json_encode($data);
 ?>