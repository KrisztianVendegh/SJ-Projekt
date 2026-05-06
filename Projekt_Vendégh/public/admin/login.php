<?php

session_start();

require_once '../../app/classes/Database.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $database = new Database();
    $db = $database->connect();

    $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";

    $stmt = $db->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {

        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $user['username'];

        header('Location: dashboard.php');
        exit;

    } else {
        $error = 'Nesprávne prihlasovacie údaje.';
    }
}

include '../../app/templates/header.php';
?>

<main>

<section class="contact-section">

    <div class="contact-box">

        <h2>Admin Login</h2>

        <?php if ($error): ?>
            <p style="color:red; margin-bottom:15px;">
                <?php echo $error; ?>
            </p>
        <?php endif; ?>

        <form method="POST">

            <input type="text" name="username" placeholder="Username" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Prihlásiť sa</button>

        </form>

    </div>

</section>

</main>

<?php include '../../app/templates/footer.php'; ?>