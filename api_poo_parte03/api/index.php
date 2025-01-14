<?php

   require_once(dirname(__FILE__). '/inc/config.php');
   require_once(dirname(__FILE__). '/inc/api_response.php');
   require_once(dirname(__FILE__). '/inc/api_logic.php');
   
   $api_response = new api_response();

   if(!$api_response->check_method($_SERVER['REQUEST_METHOD'])){
      $api_response->api_request_error('invalid request method');
   }

   $api_response->set_method($_SERVER['REQUEST_METHOD']);

   $params = null;

   if($api_response->get_method() === 'GET'){
      $api_response->set_endpoint($_GET['endpoint']);
      $params = $_GET;
   }elseif($api_response->get_method() === 'POST'){
      $api_response->set_endpoint($_POST['endpoint']);
      $params = $_POST;
   }
   

   $api_logic = new api_logic($api_response->get_endpoint(), $params);

    if(!$api_response_logic->endpoint_exist()){
      $api_response->api_request_error('Inexistent endpoint: ' . $api_response->get_endpoint());
    }

    $result = $api_logic->{$api_response->get_endpoint()}();
    $api_response->add_data('data', $result);

   $api_response->send_api_status();

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