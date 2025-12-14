<?php
$pageTitle = "Register";
require_once 'config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    
    $sql = "INSERT INTO users (username, email, password, full_name) 
            VALUES ('$username', '$email', '$password', '$full_name')";
    
    if (mysqli_query($conn, $sql)) {
        header('Location: login.php?registered=1');
        exit();
    }
    $error = "Registration failed";
}

require_once 'includes/header.php';
?>

<main class="container">
    <div class="register-form">
        <h1>Register</h1>
        
        <?php if (isset($error)): ?>
            <div class="alert error"><?php echo $error; ?></div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="full_name" required>
            </div>
            
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            
            <button type="submit" class="btn">Register</button>
        </form>
        
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>