<?php

session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once '../../app/classes/Database.php';
require_once '../../app/classes/Article.php';

$database = new Database();
$db = $database->connect();

$articleModel = new Article($db);

$id = $_GET['id'] ?? null;

if ($id) {
    $articleModel->delete((int)$id);
}

header('Location: dashboard.php');
exit;