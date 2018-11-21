<?php
$servername = "localhost";
$username = "sw3dreams";
$password = "sml12345";
$dbname = "sw3dreams";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$mysqli->query("CREATE TABLE IF NOT EXISTS user (username varchar(255) primary key, firstname varchar(255), lastname varchar(255), password varchar(255))");
?>
