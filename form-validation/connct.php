<?php
    $hostName = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbName = "php_task";

    try {
        $conn = new PDO("mysql:host=$hostName;dbname=$dbName", $dbusername, $dbpassword);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {

        die("Connection failed: " . $e->getMessage());
    }

