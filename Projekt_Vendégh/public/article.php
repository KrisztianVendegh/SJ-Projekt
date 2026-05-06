<?php

require_once '../app/classes/Database.php';
require_once '../app/classes/Article.php';

$database = new Database();
$db = $database->connect();

$articleModel = new Article($db);

$model = $_GET['model'] ?? '911';
$article = $articleModel->getByModelKey($model);

include '../app/templates/header.php';
?>

<main>

<?php if ($article): ?>

<section class="article-hero">
    <div class="container">
        <h2><?php echo $article['title']; ?></h2>
        <p><?php echo $article['subtitle']; ?></p>
    </div>
</section>

<section class="article-detail">
    <div class="container">

        <img class="article-main-image" 
             src="<?php echo $article['image']; ?>" 
             alt="<?php echo $article['title']; ?>">

        <div class="article-content">

            <h3>História modelu</h3>
            <p><?php echo $article['history']; ?></p>

            <h3>Motor a výkon</h3>
            <p><?php echo $article['engine']; ?></p>

            <h3>Dizajn a využitie</h3>
            <p><?php echo $article['design']; ?></p>

            <h3>Technické údaje</h3>

            <div class="specs">
                <div class="spec-box">
                    <span>Výroba</span>
                    <strong><?php echo $article['production']; ?></strong>
                </div>

                <div class="spec-box">
                    <span>Karoséria</span>
                    <strong><?php echo $article['body']; ?></strong>
                </div>

                <div class="spec-box">
                    <span>Motor</span>
                    <strong><?php echo $article['motor']; ?></strong>
                </div>

                <div class="spec-box">
                    <span>Pohon</span>
                    <strong><?php echo $article['drive']; ?></strong>
                </div>
            </div>

            <div class="article-gallery">
                <img src="assets/images/<?php echo $article['model_key']; ?>-1.jpg" alt="<?php echo $article['title']; ?>">
                <img src="assets/images/<?php echo $article['model_key']; ?>-2.jpg" alt="<?php echo $article['title']; ?>">
                <img src="assets/images/<?php echo $article['model_key']; ?>-3.jpg" alt="<?php echo $article['title']; ?>">
            </div>

            <a class="back-button" href="clanky.php">← Späť na články</a>

        </div>

    </div>
</section>

<?php else: ?>

<section class="page-header">
    <div class="container">
        <h2>Článok sa nenašiel</h2>
        <p>Požadovaný model neexistuje.</p>
        <a class="back-button" href="clanky.php">← Späť na články</a>
    </div>
</section>

<?php endif; ?>

</main>

<?php include '../app/templates/footer.php'; ?>