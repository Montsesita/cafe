<?php
$host="localhost";
$port=3308;
$socket="";
$user="root";
$password="contra";
$dbname="cafe";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
 ?>
