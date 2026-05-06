<?php

session_start();

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

include '../../app/templates/header.php';
?>

<main>

<section class="page-header">
    <div class="container">

        <h2>Admin Dashboard</h2>

        <p>
            Vitaj,
            <?php echo $_SESSION['admin_username']; ?>
        </p>

    </div>
</section>

</main>

<?php include '../../app/templates/footer.php'; ?>