<?php
$url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
$method = filter_var($_POST['method'], FILTER_SANITIZE_STRING);
unset($_POST['url']);
unset($_POST['method']);
require "Curl.php";


$response = new CURL();
if ($method == 'get') {
    $params = "";
    foreach ($_POST as $k => $v) {
        $params = "&" . $k . "=" . $v;
    }
    $url = $params == "" ? $url : $url . $params;
    $response = $response->init($url, $method);
} else {
    $data = $_POST;
    $response = $response->init($url, $method, $data);
}
header('Content-Type: application/json');
echo json_encode($response);
