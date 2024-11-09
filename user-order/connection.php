<?php

$server="localhost";
$username="root";
$password="";
$dbname="users_app";

$dsn="mysql:host=$server; dbname=$dbname";

try{
    $dbconnection= new PDO ($dsn, $username, $password);
}catch(PDOException $error){
    echo $error;
}

