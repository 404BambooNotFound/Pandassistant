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
    <?php
        include 'PHP/mainNavbar.php';
        include 'PHP/secondaryNavbar.php';
    ?>

        <div class="row nav_fill">
            <div class="col-md-2"></div>

            <div class="col-md-8 contenu">




            </div>

            <div class="col-md-2"></div>
        </div>
    </body>

    <script src="js/displayHour.js"></script>
</html>

