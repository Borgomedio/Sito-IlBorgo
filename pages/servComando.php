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
    else {
        $query = "SELECT * FROM `comando`";
    
        $result = $mysqli->query($query);
    
        if($result->num_rows >0)
        {
            while($row = mysqli_fetch_assoc($result))
                $test[] = $row; 
            echo json_encode($test);
        }

        $result->close();

        $mysqli->close();
    }
?>