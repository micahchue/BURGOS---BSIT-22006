<?php 

        $localhost = "localhost";
        $root = "root";
        $db_conn_password = "";
        $database = "test1";
        
        $conn = mysqli_connect($localhost, $root, $db_conn_password, $database);

        if($conn -> connect_error) {
            die("Connection Failed: ". $conn -> connect_error);
        }
    ?>