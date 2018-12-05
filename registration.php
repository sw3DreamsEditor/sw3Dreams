<?php

$mysql_servername = "localhost";
$mysql_username = "root";
$mysql_password = "sml12345";
$mysql_dbname = "sw3dreams";
$mysqli = new mysqli($mysql_servername, $mysql_username, $mysql_password, $mysql_dbname);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$pw=$_POST['password'];
$cpw=$_POST['confirmpw'];

$query = "select * from customer";
$result = $mysqli->query($query);

/* fetch object array */
echo "if this is there then fck you";
while ($obj = $result->fetch_object()) {
    echo "inside of while loop";
    if (!(in_array($username, $obj->username)) && ($pw==$cpw)) {
        echo "inside if";
        $insertstatement = "insert into customer (username, firstname, lastname, pwd) values ($username, $firstname, $lastname, $pw)";
        $whaduhec = $mysqli->query($insertstatement);
        
        if ($whaduhec) {
            echo "It's free real estate";
        } else {
            echo "It's free real estaten't";
        }
    } else {
        $GLOBALS['userexist']=true;
    }
}

    /* free result set */
    $result->close();
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
                <div id="header">
            <div id="header2">
            <p>
                <a class="headerlink" href="/about.php">&Uuml;ber uns</a><tab />|<tab /><a class="headerlink" href="/product.php">Produkt</a><tab />|<tab /><a class="headerlink" href="/index.php">Sw3Dreams</a><tab />|<tab />
                <a class="headerlink" href="/Formular.php">LOL f&uuml;r Lars</a>
            </p>
            </div>
        </div>
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
