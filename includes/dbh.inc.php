<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="Be0Visi0nAvant";
$dbName="loginsystem";

$conn = new PDO('mysql:host=' . $dbServername . ';dbname=' . $dbName . ';charset=utf8mb4', $dbUsername, $dbPassword);

?>
