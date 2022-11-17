<?php
include "vendor/autoload.php";
include "src/AuthClient.php";
use GuzzleHttp\Client;
use App\AuthClient;

$id = $_GET['id'];

$client = new AuthClient();


$data = json_decode($client->welcome($id));

$username = $data->username;
$email = $data->email;
?>
<html>
    <head>
        <title> Welcome Page </title>
    <style>
        body {
        background-color: #2a2b38;
    }
        .card {
  width: 200px;
  height: 300px;
  background: #07182E;
  position: relative;
  display: flex;
  overflow: hidden;
  border-radius: 20px;
  margin-top: 15%;
  margin-left: 45%;
}

.card span {
  text-align: center;
  margin-top:55%;
  margin-left:12%;
  margin-right:10%;
  z-index: 1;
  color: white;
  font-size: 15;
}


.card::before {
  content: '';
  position: absolute;
  width: 100px;
  background-image: linear-gradient(180deg, rgb(0, 183, 255), rgb(255, 48, 255));
  height: 130%;
  animation: rotBGimg 3s linear infinite;
  transition: all 0.2s linear;
}

@keyframes rotBGimg {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}

.card::after {
  content: '';
  position: absolute;
  background: #07182E;
  ;
  inset: 5px;
  border-radius: 15px;
}  
.card:hover:before {
  background-image: linear-gradient(180deg, rgb(81, 255, 0), purple);
  animation: rotBGimg 3.5s linear infinite;
}

    </style>
    </head>
    <body>
    <div class="card">
    <span>Hello, <?php echo $username ?>!
    <br>
    Email: <?php echo $email ?>
    </span>

</div>
    </body>
</html>
