<?php

    $database_server = "localhost";
    $database_user = "root";
    $database_pass = "";
    $database_name = "system";

    $conn = mysqli_connect($database_server,$database_user,$database_pass,$database_name);
    
    if (!$conn){
        die("Connection Failed:".mysqli_connect_error());
    }
      


?>