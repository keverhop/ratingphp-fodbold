<?php
include("inc/config.php");

if(!isset($_SESSION["loggedIn"])){
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="da">
    <head>
        <title>Topliste</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
        <link href="css/main.css" rel="stylesheet" type="text/css">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/menu.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    </head>
    <body style="justify-content: inherit;">
        <?php
            include("menu.php");
        ?>
        <div class="loginBox" style="margin: 2em 0;">
            <br><h1>Topliste</h1><br><br>
            <hr>
            <br><br>
            <?php
                getToplist($link);
            ?>
        </div>
        <script src="js/script.js" type="text/javascript"></script>
        <script src="js/classie.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>