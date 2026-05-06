<?php

require_once '../app/classes/Database.php';

$database = new Database();
$db = $database->connect();

echo "Pripojenie k databáze funguje.";
?>