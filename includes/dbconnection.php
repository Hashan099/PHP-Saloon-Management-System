<?php

$con = new mysqli('localhost', 'root', '', 'slsms_db');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>
