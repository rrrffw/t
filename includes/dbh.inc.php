<?php

$servername = "localhost";
$dBUsername = "id10479786_shit";
$dBPassword = "C00ldud3$01";
$dBName = "id10479786_fuckingshit";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}