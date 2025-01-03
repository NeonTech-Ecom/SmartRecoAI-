<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $query = $input['query'];

    // Call Python backend API
    $url = 'http://localhost:5000/recommend';
    $data = json_encode(['query' => $query]);

    $options = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/json\r\n",
            'content' => $data,
        ],
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);

    echo $response;
}
?>