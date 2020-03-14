<?php

    //require('config.php');
    // Create connection
    $conn = mysqli_connect('localhost', 'root', 'sql123', 'phpblog');

    // Check connection
    if(mysqli_connect_errno()){
        // Connection Failed
        echo 'Failed to connect to MySQL '.mysqli_connect_errno();
    }