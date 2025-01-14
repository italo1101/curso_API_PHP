 <?php
    require_once('inc/config.php');
    require_once('inc/api_function.php');
    
    $result = api_request('status', 'GET');
    print_r($result);

    $result = api_request('get_all_clients', 'GET');
    print_r($result);
 ?>