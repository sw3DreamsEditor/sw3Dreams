<?php
$username=$_POST['username']
$firstname=$_POST['firstname']
$lastname=$_POST['lastname']
$pw=$_POST['password']
$cpw=$_POST['confirmpw']

// if username !exist && pw=cpw create user
// else abort
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
        <div id="header">
            
        </div>
        <div id="nav">
            
        </div>
        <div id="body">
            <form method="post">
                <input name="username" type="text" placeholder="username" />
                <input name="firstname" type="text" placeholder="firstname" />
                <input name="lastname" type="text" placeholder="lastname" />
                <input name="password" type="password" placeholder="password" />
                <input name="confirmpw" type="password" placeholder="confirm password" />
                <button type="submit" value="Registrieren">Registrieren</button>
            </form>
        </div>
        <div id="footer">
            
        </div>
    </body>
</html>
