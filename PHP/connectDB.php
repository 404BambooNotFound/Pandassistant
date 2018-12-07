<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 06/12/2018
 * Time: 09:50
 */

try {
    $db = new PDO('mysql:host=localhost:3306;dbname=pandassistant', 'admin', 'admin');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

$websiteName = "Pandassistant";
$userName = "Yannick";