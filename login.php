<?php
$pageTitle = "Login";
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            header('Location: index.php');
            exit();
        }
    }
    $error = "Invalid login";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <!-- Header + Registration CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
</head>
<body>

    <!-- INCLUDE HEADER -->
    <?php require_once 'includes/header.php'; ?>

    <main class="container page-content">

        <div class="login-form">
            <h1>Login</h1>

            <?php if (isset($error)): ?>
                <div class="alert error"><?php echo $error; ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required>
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>

                <button type="submit" class="btn">Login</button>
            </form>

            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>

    </main>

    <!-- INCLUDE FOOTER -->
    <?php require_once 'includes/footer.php'; ?>

    <!-- Header JS -->
    <script src="js/header.js"></script>
</body>
</html>
