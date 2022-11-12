<?php

include "vendor/autoload.php";

use App\AuthClient;

$client = new AuthClient();

if (isset($_POST['username']))
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = $client->register($username, $email, $password);
$result->getStatusCode();
$result->getReasonPhrase();
$result->getProtocolVersion();
var_dump($result->getBody()->getContents());