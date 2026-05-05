<?php include '../app/templates/header.php'; ?>

<?php
$model = $_GET['model'] ?? '911';
?>

<section class="article-hero">
    <div class="container">

        <?php if ($model == '911'): ?>
            <h2>Porsche 911</h2>
            <p>Ikona športových áut.</p>

        <?php elseif ($model == 'taycan'): ?>
            <h2>Porsche Taycan</h2>
            <p>Elektrická budúcnosť Porsche.</p>

        <?php elseif ($model == 'cayenne'): ?>
            <h2>Porsche Cayenne</h2>
            <p>Luxusné SUV s výkonom.</p>

        <?php elseif ($model == 'panamera'): ?>
            <h2>Porsche Panamera</h2>
            <p>Športová limuzína.</p>

        <?php elseif ($model == 'macan'): ?>
            <h2>Porsche Macan</h2>
            <p>Kompaktné športové SUV.</p>
        <?php endif; ?>

    </div>
</section>

<section class="article-detail">
    <div class="container">

        <?php if ($model == '911'): ?>
            <img class="article-main-image" src="assets/images/porsche911.jpg">
            <p>Porsche 911 je legendárne športové auto...</p>

        <?php elseif ($model == 'taycan'): ?>
            <img class="article-main-image" src="assets/images/taycan.jpg">
            <p>Porsche Taycan je prvý elektrický model...</p>

        <?php elseif ($model == 'cayenne'): ?>
            <img class="article-main-image" src="assets/images/cayenne.jpg">
            <p>Porsche Cayenne je luxusné SUV...</p>

        <?php elseif ($model == 'panamera'): ?>
            <img class="article-main-image" src="assets/images/panamera.jpg">
            <p>Porsche Panamera kombinuje výkon a komfort...</p>

        <?php elseif ($model == 'macan'): ?>
            <img class="article-main-image" src="assets/images/macan.jpg">
            <p>Porsche Macan je kompaktné SUV...</p>
        <?php endif; ?>

        <a class="back-button" href="clanky.php">← Späť na články</a>

    </div>
</section>

<?php include '../app/templates/footer.php'; ?>