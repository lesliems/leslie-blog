<?php

require_once(__DIR__ . "/../model/config.php");

$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");
//figure out whether the query was succsessful or not
if ($query) {
    echo "<p>Successfully created table: posts</p>";
} 
else {
   echo "<p>" . $_SESSION["connection"]->error ."</p>";
}
//making the table users
$query = $_SESSION["connection"]->query("CREATE TABLE users ("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "username varchar(30) NOT NULL,"
        . "email varchar(50) NOT NULL,"
        . "password char(128) NOT NULL, "
        //salt is security
        . "salt char(128) NOT NULL,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "<p>Successfully created table: users </p>";
 } 
 else {
    echo "<p>" . $_SESSION["connection"]->error ."</p>";
}