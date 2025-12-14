<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faith Deliverance Tabernacle - A place of worship, community, and hope">
    <meta name="keywords" content="church, christian, worship, faith, community">
    <meta name="author" content="Faith Deliverance Tabernacle">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' - Faith Deliverance Tabernacle' : 'Faith Deliverance Tabernacle'; ?></title>
    <link rel="stylesheet" href="css/header.css">
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
                     <ul class="nav-menu" id="navMenu">
            <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a href="ministries.php" class="<?php echo $current_page == 'ministries.php' ? 'active' : ''; ?>"><i class="fas fa-hands-praying"></i> Ministries</a></li>
            <li><a href="counseling.php" class="<?php echo $current_page == 'counseling.php' ? 'active' : ''; ?>"><i class="fas fa-heart"></i> Counseling</a></li>
            <li><a href="prayer.php" class="<?php echo $current_page == 'prayer.php' ? 'active' : ''; ?>"><i class="fas fa-pray"></i> Prayer</a></li>
            <li><a href="events.php" class="<?php echo $current_page == 'events.php' ? 'active' : ''; ?>"><i class="fas fa-calendar-alt"></i> Events</a></li>
            <li><a href="membership.php" class="<?php echo $current_page == 'membership.php' ? 'active' : ''; ?>"><i class="fas fa-users"></i> Join Us</a></li>
            <li><a href="blessings.php" class="<?php echo $current_page == 'blessings.php' ? 'active' : ''; ?>"><i class="fas fa-hand-holding-heart"></i> Tithes & Offerings</a></li>
            <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>"><i class="fas fa-envelope"></i> Contact</a></li>
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