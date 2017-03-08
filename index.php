<?php
require_once 'model/pdo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="view/materialize/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="view/style.css"  media="screen,projection"/>
    <title>Chose your destiny</title>
</head>
<body>

    <header>
        <nav class="blue-grey darken-2">
            <div class="container">
                <div class="nav-wrapper">
                <a href="index.php" class="brand-logo right">Logo</a>
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li><a href="index.php?yd">Your death</a></li>
                        <li><a href="index.php?wdyp">What do you prefere ?</a></li>
                        <li class="couleur"><a href="index.php?atstu">Anything to say to us ?</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php
        if (empty($_GET)) {
            include "view/chose.php";
        }
        else if (isset($_GET["yd"])) {

            include "view/index_your_death.php";
        }
        else if (isset($_GET["wdyp"])) {

            include "view/either.php";
        }
        else if (isset($_GET["atstu"])) {

            include "view/fomulaire.php";
        }
        ?>
    </main>
    <footer class="page-footer blue-grey darken-2">
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

</body>

</html>
