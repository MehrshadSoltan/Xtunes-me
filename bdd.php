<?php

// Create connection
$conn = new PDO('mysql:host= localhost:3306;dbname=xtunesme_userdata;charset=utf8','xtunesme_Mehrshad','M8809394m');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
