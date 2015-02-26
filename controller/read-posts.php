<?php

    require_once (__DIR__ . "/../model/config.php");
    $query = "SELECT * FROM posts";
    $resullt = $_SESSION["connection"]->query($query);
    
    if($resullt){
        while($row = mysqli_fetch_array($result)){
            echo "<div class='post'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<br />";
            echo "<p>" . $row['post'] . "</p>";
            echo "<br />";
            echo "</div>";
        }
    }
