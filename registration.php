<?php

$mysql_servername = "localhost";
$mysql_username = "root";
$mysql_password = "sml12345";
$mysql_dbname = "sw3dreams";
$mysqli = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_dbname);

$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$pw=$_POST['password'];
$cpw=$_POST['confirmpw'];


echo "";
$existing = $mysqli->query("select $username from user");
if (($existing!=$username) && ($pw==$cpw)) {
    echo "YEEEEEEEEET";
    $pwhash = password_hash($pw, PASSWORD_DEFAULT);
    $whaduhec = $mysqli->query("insert into user (username, firstname, lastname, password) values ($username, $firstname, $lastname, $pwhash)");
    echo $whaduhec;
} else {
    $GLOBALS['userexist']=true;
}
?>

<DOCTYPE html>
<html>
    <head>
        <title>Sw3Dreams - Benutzerregistration</title>
        <meta charset="utf-8" />
        <meta lang="de" />
        <link href="design.css" rel="stylesheet" />
    </head>
    <body>
        <?php
        if ($GLOBALS['userexists']) {
            echo "        <p>Der gew&auml;hlte Benutzername existiert bereits. Bitte w&auml;hle einen anderen.</p>";
        }
        ?>
        <form method="post">
            <input name="username" type="text" placeholder="username" />
            <input name="firstname" type="text" placeholder="firstname" />
            <input name="lastname" type="text" placeholder="lastname" />
            <input name="password" type="password" placeholder="password" />
            <input name="confirmpw" type="password" placeholder="confirm password" />
            <button type="submit" value="Registrieren">Registrieren</button>
        </form>
    </body>
</html>
