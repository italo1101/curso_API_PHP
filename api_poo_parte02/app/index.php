 <?php
    require_once('inc/config.php');
    require_once('inc/api_function.php');
    
    $result = api_request('status', 'GET');

    echo '<pre>';
    print_r($result);


 ?>