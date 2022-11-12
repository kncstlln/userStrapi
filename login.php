<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

$identifier = $_POST['username'];
$password = $_POST['password'];

$result = $client->login($identifier, $password);
$result->getStatusCode();
$result->getReasonPhrase();
$result->getProtocolVersion();
var_dump($result->getBody()->getContents());