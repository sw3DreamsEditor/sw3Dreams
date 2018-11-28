<?php
$servername = "localhost";
$username = "root";
$password = "sml12345";
$dbname = "sw3dreams";
$mysqli = new mysqli($servername, $username, $password, $dbname);
$mysqli->query("CREATE TABLE IF NOT EXISTS user (username varchar(255) primary key, firstname varchar(255), lastname varchar(255), password varchar(255))");
$mysqli->query("CREATE TABLE IF NOT EXISTS product (productname varchar(255) primary key, price float, description varchar(255), picpath varchar(255))");
?>
