<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "schoolproject";
    
    $conn = mysqli_connect($servername,$username,$password,$db);

    if($conn){
        // echo "Connection okay";

    }
    else {
        echo "Connection failed".mysqli_connect_error();

    }
?>