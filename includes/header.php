<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faith Deliverance Tabernacle - A place of worship, community, and hope">
    <meta name="keywords" content="church, christian, worship, faith, community">
    <meta name="author" content="Faith Deliverance Tabernacle">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Faith Deliverance Tabernacle' : 'Faith Deliverance Tabernacle'; ?></title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
</head>
<body>
    <!-- Header with Logo -->
    <header class="main-header">
        <div class="header-container">
            <div class="logo-container">
                <a href="index.php">
                    <img src="images/logo.jpg" alt="Faith Deliverance Tabernacle Logo" class="logo">
                </a>
                <div class="church-info">
                    <h1>Faith Deliverance Tabernacle</h1>
                    <p class="tagline">A place of worship, community, and hope</p>
                </div>
            </div>
            
            <!-- Login/Logout Button -->
            <div class="auth-section">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <div class="user-welcome">
                        <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                        <a href="dashboard.php" class="btn-auth"><i class="fas fa-user"></i> Dashboard</a>
                        <a href="logout.php" class="btn-auth logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                <?php else: ?>
                    <div class="login-buttons">
                        <a href="login.php" class="btn-auth"><i class="fas fa-sign-in-alt"></i> Login</a>
                        <a href="register.php" class="btn-auth register"><i class="fas fa-user-plus"></i> Register</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>