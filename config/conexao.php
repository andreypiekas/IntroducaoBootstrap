<?php

$host = "localhost";
$user = "andreypiekas";
$pass = "piekas123";
$bd = "twitter_bd";

$link = mysqli_connect($host, $user,$pass,$bd);

if(!$link){
    echo "Error connect";
}



?>