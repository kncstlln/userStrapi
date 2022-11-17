<?php

include "vendor/autoload.php";
include "src/AuthClient.php";

use App\AuthClient;

$client = new AuthClient();

$identifier = $_POST['identifier'];
$password = $_POST['password'];

$result = $client->login($identifier, $password);
$body=json_decode($result->getBody()->getContents());
$id =  $body->user->id;
header('Location: welcome.php?id='.$id);