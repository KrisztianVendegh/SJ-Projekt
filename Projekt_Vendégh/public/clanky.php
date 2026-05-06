<?php

require_once '../app/classes/Database.php';
require_once '../app/classes/Article.php';

$database = new Database();
$db = $database->connect();

$articleModel = new Article($db);
$articles = $articleModel->getAll();

include '../app/templates/header.php';
?>

<main>

<section class="page-header">
    <div class="container">
        <h2>Články</h2>
        <p>Prehľad najznámejších modelov Porsche</p>
    </div>
</section>

<section class="posts">
    <div class="container posts-grid">

        <?php foreach ($articles as $article): ?>

            <div class="post">

                <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">

                <div class="post-content">

                    <h3><?php echo $article['title']; ?></h3>

                    <p>
                        <?php echo shortText($article['subtitle'], 80); ?>
                    </p>

                    <a href="article.php?model=<?php echo $article['model_key']; ?>">
                        Čítať viac →
                    </a>

                </div>

            </div>

        <?php endforeach; ?>

    </div>
</section>

</main>

<?php include '../app/templates/footer.php'; ?>