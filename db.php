<?php

require 'config/constants.php';

$servername = 'localhost';
$username = 'root';
$password = 'meminnu';
$db = 'ecom';

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$con) {
    exit('Connection failed: '.mysqli_connect_error());
}
