<?php
    $conn = mysqli_connect("127.0.0.1", "root", "rs@mx.7838Gtx#6512", "pglife");
    
    if(mysqli_connect_errno()){
        echo "Connection Error: ".mysqli_connect_error();
        return;
    }
?>