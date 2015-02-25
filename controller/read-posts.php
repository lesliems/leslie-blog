<?php

    require_once (__DIR__ . "/../model/config.php");
    $query = "SELECT = FROM posts";
    $resullt = $_SESSION["connection"]->query($query);
    
    if($resullt){
        while($row = msqli_fetch_array($result)){
            echo "<div>  class='post'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<br />";
            echo "</div>";
        }
    }
