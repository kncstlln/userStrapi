<?php

include "vendor/autoload.php";
include "src/AuthClient.php";

use App\AuthClient;

$client = new AuthClient();

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$result = $client->register($username, $email, $password);
$result->getStatusCode();
$result->getReasonPhrase();
$result->getProtocolVersion();
$result->getBody()->getContents();
header('Location: register-load.php');

