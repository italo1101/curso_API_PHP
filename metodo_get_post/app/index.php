 <?php
    require_once('inc/config.php');
    require_once('inc/api_function.php');
        
    $variables = [
            'nome' => 'joao',
            'sobrenome' => 'ribeiro'
        ];

    api_request('status', 'GET', $variables);
 ?>