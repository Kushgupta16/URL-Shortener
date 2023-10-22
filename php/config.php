<?php
    $conn= mysqli_connect("localhost", "root", "", "urlshortener");
    if(!$conn){
        echo "Database Connection Error".mysqli_connect_error();
    }
?>