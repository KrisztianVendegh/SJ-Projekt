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
$articles = $articleModel->getAll();

include '../../app/templates/header.php';
?>

<main>

<section class="page-header">
    <div class="container">
        <h2>Admin Dashboard</h2>
        <p>Vitaj, <?php echo $_SESSION['admin_username']; ?></p>
    </div>
</section>

<section class="admin-section">
    <div class="container">

        <div class="admin-top">
            <h3>Zoznam článkov</h3>
            <a class="admin-button" href="create.php">+ Pridať článok</a>
        </div>

        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Názov</th>
                        <th>Model</th>
                        <th>Vytvorené</th>
                        <th>Akcie</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($articles as $article): ?>
                        <tr>
                            <td><?php echo $article['id']; ?></td>
                            <td><?php echo $article['title']; ?></td>
                            <td><?php echo $article['model_key']; ?></td>
                            <td><?php echo $article['created_at']; ?></td>
                            <td>
                                <a class="edit-link" href="edit.php?id=<?php echo $article['id']; ?>">Upraviť</a>
                                <a class="delete-link" href="delete.php?id=<?php echo $article['id']; ?>">Vymazať</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>

    </div>
</section>

</main>

<?php include '../../app/templates/footer.php'; ?>