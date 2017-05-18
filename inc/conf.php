<?php
/**
 * @package  : GIS
 * @author   : Faisal Mahadi <faisalmahadi126@gmail.com>
 * @since    : 2017
 * @license  : http://hunt3r6.net
 */
$servername = "localhost";
$username 	= "root";
$password 	= "";
$db       	= "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>