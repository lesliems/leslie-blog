<?php
    require_once(__DIR__ . "/../model/database.php");
    
    $connection = new mysqli($host, $username, $password);
    
    if($connection->connect_error){
        die("Error: " .$connection->connect_errno);
    }
    else{
        echo"Success: " . $connection->host_info;
    }
    $connection->close();