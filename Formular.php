<DOCTYPE html>
<html>
    <head>
        <title>Sw3Dreams</title>
        <meta charset="utf-8" />
        <meta lang="de" />
        <link href="/design.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Inconsolata" href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
<body>
    <div id="testheader">
        <a class="headerlink" href="index.php">Home</a>
    </div>
    <div id="Formular">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "sml12345";
            $dbname = "sw3dreams";

            $mysqli = new mysqli($servername, $username, $password, $dbname);

            $uploads_dir = '/var7www/sw3dreams/pruducts/pictures';
            $picdir = '';
            foreach ($_FILES["picture"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["picture"]["tmp_name"][$key];
                    // basename() may prevent filesystem traversal attacks;
                    // further validation/sanitation of the filename may be appropriate
                    echo "this is the key btw: $key whatevertheeff";
                    $name = basename($_FILES["picture"]["name"][$key]);
                    $picdir = "$uploads_dir/$name";
                    move_uploaded_file($tmp_name, "$picdir");
                } else {
                    echo "<h1>Whoops, there went something wrong with the upload of the picture</h1>";
                    echo "\n<p>aka you (client-side) fucked up</p>";
                }
            }
            $mysqli->query("insert into product (productname, price, description, picpath) values ($_POST[productname], $_POST[price], $_POST[desc], $picdir)");
            echo "$_POST[productname], $_POST[price], $_POST[description], $picdir";
            echo '        <form enctype="multipart/form-data" method="post">';
            echo '            <input id="FormularName" name="productname" placeholder="Name" />';
            echo '            <input id="FormularPreis" name="price" placeholder="Preis" />';
            echo '            <textarea id="FormularBeschrieb" name="description" placeholder="Beschreiben Sie das Produkt"></textarea>';
            echo '            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />';
            echo '            <input name="picture" type="file" accept="image/jpeg" />';
            echo '            <button type="submit" value="Submit">Submit</button>';
        ?>
        </form>
      </div>
    </body>
</html>
