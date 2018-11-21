<?php
$servername = "localhost";
$username = "sw3dreams";
$password = "sml12345";
$dbname = "sw3dreams";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$tableuser = $mysqli->query("CREATE TABLE IF NOT EXISTS user (username varchar(16) primary key, firstname varchar(25), lastname varchar(25), password varchar(25))");
echo $tableuser;
?>