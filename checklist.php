<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 07/12/2018
 * Time: 01:13
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

        <div class="container main_container">
            <div class="row">
                <div class="col-md-12 div_checklist">
                    <h2>Check-List</h2>
                    <h4>Quels sont vos besoins ?</h4>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                            <table class="table_besoins">
                                <tr>
                                    <th class="table_libelle">Libellé</th>
                                    <th class="table_echeance">Échéance</th>
                                    <th class="table_edit"></th>
                                    <th class="table_remove"></th>
                                </tr>
                                <tr>
                                    <td class="table_libelle">Une caisse de carottes râpées</td>
                                    <td class="table_echeance">Au plus tôt</td>
                                    <td class="table_edit"><button><img src="octicons/pencil_used.png" /></button></td>
                                    <td class="table_remove"><button><img src="octicons/trashcan_used.png" /></button></td>
                                </tr>
                                <tr>
                                    <td class="table_libelle">Trois bouteilles de Whisky</td>
                                    <td class="table_echeance">Au plus tôt</td>
                                    <td class="table_edit"><button><img src="octicons/pencil_used.png" /></button></td>
                                    <td class="table_remove"><button><img src="octicons/trashcan_used.png" /></button></td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="btn-group add_remove" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-success">Ajouter une tâche</button>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>

    <script src="js/displayHour.js"></script>
</html>
