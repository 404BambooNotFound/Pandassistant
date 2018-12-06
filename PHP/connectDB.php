<?php
/**
 * Created by PhpStorm.
 * User: Théo
 * Date: 06/12/2018
 * Time: 09:50
 */

try {
    $db = new PDO('mysql:host=localhost:3307;dbname=pandassistant', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

$websiteName = "404Bamboo";
$userName = "Yannick";