<?php
// Define current page for active class
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Navigation Menu -->
<nav class="main-nav">
    <div class="nav-container">
        <button class="mobile-menu-btn" id="mobileMenuBtn">
            <i class="fas fa-bars"></i>
        </button>
        
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
        </ul>
    </div>
</nav>