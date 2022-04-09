<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'my_db_1';

    $conn = mysqli_connect($host, $user, $pass, $dbname);
    if(!$conn){
        echo "Connection failed!";
    }


?>