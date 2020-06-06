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
        $query = "SELECT * FROM `domande1`";
    
        $result = $mysqli->query($query);
        if($result->num_rows >0)
        {
            
            $myArray = array();
            while($row = $result -> fetch_array(MYSQLI_ASSOC)) {
                $myArray[] =array_map('utf8_encode',$row);
            }
            echo json_encode($myArray);
        }

        //$result->close();
        $mysqli->close();
    }
?>