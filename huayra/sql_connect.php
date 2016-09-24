<?php
    //this files contains database access information
    
    //set the database access information as constants:
    DEFINE('DB_USER','root');
    DEFINE('DB_PASSWORD','hcf1443497615..');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','forum2');

    //make the connectionL:
    $dbc=@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)OR die('Could not connect to Mysql:'.mysqli_connect_error());

    //set the encoding...
    mysqli_set_charset($dbc,'utf-8');
    echo 'connect database success';
?>
