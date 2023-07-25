<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'db_fashionpage';

    // Create connection 
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Kết nối không thành công: ' . $conn->connect_error);
    }
    
?>