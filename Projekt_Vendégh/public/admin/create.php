<?php

session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

require_once '../../app/classes/Database.php';
require_once '../../app/classes/Article.php';
require_once '../../app/functions/helpers.php';

$database = new Database();
$db = $database->connect();

$articleModel = new Article($db);

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'model_key' => cleanInput($_POST['model_key']),
        'title' => cleanInput($_POST['title']),
        'subtitle' => cleanInput($_POST['subtitle']),
        'image' => cleanInput($_POST['image']),
        'history' => cleanInput($_POST['history']),
        'engine' => cleanInput($_POST['engine']),
        'design' => cleanInput($_POST['design']),
        'production' => cleanInput($_POST['production']),
        'body' => cleanInput($_POST['body']),
        'motor' => cleanInput($_POST['motor']),
        'drive' => cleanInput($_POST['drive'])
    ];

    if ($articleModel->create($data)) {
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Článok sa nepodarilo pridať.';
    }
}

include '../../app/templates/header.php';
?>

<main>

<section class="page-header">
    <div class="container">
        <h2>Pridať článok</h2>
        <p>Vytvorenie nového článku o modeli Porsche</p>
    </div>
</section>

<section class="contact-section">
    <div class="contact-box admin-form-box">

        <?php if ($error): ?>
            <p style="color:red; margin-bottom:15px;"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST">

            <input type="text" name="model_key" placeholder="Model key napr. boxster" required>
            <input type="text" name="title" placeholder="Názov článku" required>
            <input type="text" name="subtitle" placeholder="Krátky popis" required>
            <input type="text" name="image" placeholder="Cesta k obrázku napr. assets/images/boxster.jpg" required>

            <textarea name="history" placeholder="História modelu" required></textarea>
            <textarea name="engine" placeholder="Motor a výkon" required></textarea>
            <textarea name="design" placeholder="Dizajn a využitie" required></textarea>

            <input type="text" name="production" placeholder="Výroba napr. od roku 1996" required>
            <input type="text" name="body" placeholder="Karoséria" required>
            <input type="text" name="motor" placeholder="Motor" required>
            <input type="text" name="drive" placeholder="Pohon" required>

            <button type="submit">Pridať článok</button>

        </form>

    </div>
</section>

</main>

<?php include '../../app/templates/footer.php'; ?>