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
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav_welcome">
                    <a class="navbar-brand">Bienvenue, <?php echo $userName; ?> !</a>


                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <form class="form-inline my-2 my-lg-0">
                                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Télé-Assistance</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8 contenu">




                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>
