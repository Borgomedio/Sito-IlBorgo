<?php
    $servername = "localhost";
    $username = "id13959336_root";
    $password = "Semeiotica1234$";
    $dbname = "id13959336_my_casabaseborgotti";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if (mysqli_connect_errno()) { 
        echo "Error to connect to DBMS: ".mysqli_connect_error(); 
        exit();
    }
?>