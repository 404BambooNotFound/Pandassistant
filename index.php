<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 06/12/2018
 * Time: 09:05
 */

include 'PHP/connectDB.php';

?>


<html>
    <head>
        <title><?php echo $websiteName ?> - About</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css" />
        <link rel="stylesheet" href="css/bamboostyle.css" />
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark bg-dark nav_welcome">
                    <a class="navbar-brand">Bienvenue, <?php echo $userName; ?> !</a>

                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Télé-Assistance</button>
                    </form>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark bg-secondary nav_info">
                    <a class="navbar-brand">18°C - Temps dégagé.</a>

                    <a class="navbar-brand nothing">Aucun danger en prévision, soyez rassuré.</a>

                    <form class="form-inline my-2 my-lg-0">
                        <a class="navbar-brand" id="hours">
                        </a>
                    </form>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>

            <div class="col-md-8 contenu">




            </div>

            <div class="col-md-2"></div>
        </div>
    </body>

    <script src="js/displayHour.js"></script>
</html>

