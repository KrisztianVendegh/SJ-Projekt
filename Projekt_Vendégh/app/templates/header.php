<?php require_once __DIR__ . '/../functions/helpers.php'; ?>

<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche Blog</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
    <div class="container">
        <h1>Porsche Blog</h1>

        <nav>
            <a class="<?php echo isActivePage('index.php'); ?>" href="index.php">Domov</a>
            <a class="<?php echo isActivePage('clanky.php'); ?>" href="clanky.php">Články</a>
            <a class="<?php echo isActivePage('kontakt.php'); ?>" href="kontakt.php">Kontakt</a>
        </nav>
    </div>
</header>