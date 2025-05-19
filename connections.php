<?php

$connections = mysqli_connect("localhost","root","","myDB");
    if (mysqli_connect_errno()){
        echo "Failed to connect to MYSQL: " . mysql_connect_error();
    }

?>