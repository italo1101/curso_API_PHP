<?php

   require_once(dirname(__FILE__). '/inc/config.php');
   require_once(dirname(__FILE__). '/inc/api_class.php');
   
   $api = new api_class();

   $api->send_api_status();

   // if($api->check_method($_SERVER['REQUEST_METHOD'])){
   //    $api->api_request_error('Aconteceu um erro na api');
   // }





    // resposta temporaria

   // header("Content-Type:application/json");

   // $data['status'] = 'SUCCESS';
   // $data['method'] = $_SERVER['REQUEST_METHOD'];

   // if($data['method'] == 'GET'){
   //    $data['data'] = $_GET;
   // }else if($data['method'] == 'POST'){
   //    $data['data'] = $_post;
   // }
   
   // echo json_encode($data);
?>