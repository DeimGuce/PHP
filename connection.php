<?php
$connection = mysqli_connect ("localhost", "root","","myDB");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQl:", mysqli_connect_error();
}
?>