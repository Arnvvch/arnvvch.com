<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$quotes = json_decode(file_get_contents('stoic_quotes.json'), true);
$random = array_rand($quotes);

header('Content-Type: application/json');
echo json_encode($quotes[$random], JSON_PRETTY_PRINT);