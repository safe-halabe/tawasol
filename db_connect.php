<?php

    //  Connect to DB

    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'tawasol';

    //  Create a db connection
    $con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(!$con) {
        
        echo 'Could Not Connect To DB!';
        die();
        
    }

    mysqli_set_charset($con,'utf8');

?>