 <?php
    require_once('inc/config.php');
    require_once('inc/api_function.php');
        
    $variables = [
            'nome' => 'joao',
            'sobrenome' => 'ribeiro'
        ];

    
    $result = api_request('status', 'GET', $variables);

    echo '<pre>';
    print_r($result);


 ?>