<?php    

$host       = "localhost";
$db_name    = "kpr32_BD";
$user       = "kpr32_kpr32";
$password   = "!Q2w3e4r5t";

// Создание экземпляра класса PDO для работы БД
$dbh = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);

?>