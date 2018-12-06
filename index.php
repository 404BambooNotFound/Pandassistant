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
        <link rel="stylesheet" href="css/bootstrap-grid.min.css"/>
        <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
        <link rel="stylesheet" href="css/bamboostyle.css"/>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <img class="img-fluid" src="img/brucebanner.png"/>
            </div>

            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8 contenu">

                    <h1>Team 404 - Bamboo Not Found</h1>
<!--                    <h2>...Site en construction...</h2>-->
                    <?php
                        $req = $db->prepare("SELECT * FROM teammate");
                        $req->execute();
                        $res = $req->fetchAll();
                        echo "<ul>";
                        foreach($res as $line) {
                                echo "<li>" . $line['firstname'] . " " . $line['lastname'] . "</li>";
                        }
                        echo "</ul>";
                    ?>

                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>
