<?php

function api_request($endpoint, $method = 'GET', $variables = []) {
    // iniciar o cliente cURL
    $client = curl_init();

    // retornar o resultado como uma string
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

    // definir a URL base
    $url = API_BASE_URL . "api/?endpoint=" . $endpoint;

    // adicionar variáveis GET, se existirem
    if (!empty($variables)) {
        $url .= "&" . http_build_query($variables);
    }

    // Depuração: imprimir a URL antes de fazer a requisição
    echo "URL gerada para a requisição: $url<br>";

    curl_setopt($client, CURLOPT_URL, $url);
    $response = curl_exec($client);

    // Verificar se houve algum erro na requisição
    if ($response === false) {
        echo "Erro no cURL: " . curl_error($client);
        return null;
    }

    return json_decode($response, true);
}
