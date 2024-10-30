<?php
require_once __DIR__ . '/../vendor/autoload.php';
$mongoClient = new MongoDB\Client("mongodb+srv://75768786:xRMLyCMglninGNrb@restaurante.zr1ns.mongodb.net/?retryWrites=true&w=majority&appName=Restaurante");
$database = $mongoClient->selectDatabase('restaurante');
$tasksCollection = $database->restaurante;
?>
