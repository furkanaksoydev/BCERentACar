<?php

$host="localhost";
$kullanici="root";
$parola="";
$vt="bcerent";

$baglan = mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglan, "UTF8");
    
$db = new PDO("mysql:host=localhost;dbname=bcerent;charset=utf8","root","");

$dsn = 'mysql:dbname=bcerent;host=127.0.0.1';
$user = 'root';
$password = '';

$baglanti = new PDO($dsn, $user, $password);

?>