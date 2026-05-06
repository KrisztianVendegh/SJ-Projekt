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

$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: dashboard.php');
    exit;
}

$article = $articleModel->getById((int)$id);

if (!$article) {
    header('Location: dashboard.php');
    exit;
}

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

    if ($articleModel->update((int)$id, $data)) {

        header('Location: dashboard.php');
        exit;

    } else {
        $error = 'Článok sa nepodarilo upraviť.';
    }
}

include '../../app/templates/header.php';
?>

<main>

<section class="page-header">
    <div class="container">
        <h2>Upraviť článok</h2>
        <p>Editácia existujúceho článku</p>
    </div>
</section>

<section class="contact-section">
    <div class="contact-box admin-form-box">

        <?php if ($error): ?>
            <p style="color:red; margin-bottom:15px;">
                <?php echo $error; ?>
            </p>
        <?php endif; ?>

        <form method="POST">

            <input 
                type="text" 
                name="model_key" 
                value="<?php echo $article['model_key']; ?>" 
                required
            >

            <input 
                type="text" 
                name="title" 
                value="<?php echo $article['title']; ?>" 
                required
            >

            <input 
                type="text" 
                name="subtitle" 
                value="<?php echo $article['subtitle']; ?>" 
                required
            >

            <input 
                type="text" 
                name="image" 
                value="<?php echo $article['image']; ?>" 
                required
            >

            <textarea name="history" required><?php echo $article['history']; ?></textarea>

            <textarea name="engine" required><?php echo $article['engine']; ?></textarea>

            <textarea name="design" required><?php echo $article['design']; ?></textarea>

            <input 
                type="text" 
                name="production" 
                value="<?php echo $article['production']; ?>" 
                required
            >

            <input 
                type="text" 
                name="body" 
                value="<?php echo $article['body']; ?>" 
                required
            >

            <input 
                type="text" 
                name="motor" 
                value="<?php echo $article['motor']; ?>" 
                required
            >

            <input 
                type="text" 
                name="drive" 
                value="<?php echo $article['drive']; ?>" 
                required
            >

            <button type="submit">Uložiť zmeny</button>

        </form>

    </div>
</section>

</main>

<?php include '../../app/templates/footer.php'; ?>