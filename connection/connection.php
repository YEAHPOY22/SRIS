<?php 

function connection(){
    
    $host = "localhost";
    $username = "root";
    $password = "admin";
    $database = "sris_project";

    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        echo $con->connect->error;
    }else {
        return $con;
    }
}





?>
