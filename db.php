<?php
$servername = "localhost";
$username = "sw3dreams";
$password = "sml12345";
$dbname = "sw3dreams";

$mysqli = new mysqli($servername, $username, $password, $dbname);

$out = $mysqli->query("CREATE TABLE IF NOT EXISTS user (username varchar(255) primary key, firstname varchar(255), lastname varchar(255), password varchar(255))");
echo $out;
$out = $mysqli->query("SELECT * FROM user");

if ($out->num_rows > 0) {
    // output data of each row
    while($row = $out->fetch_assoc()) {
        echo "firstname: " . $row["firstname"]. " - lastname: " . $row["lastname"]. " - username: " . $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
