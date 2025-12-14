<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- ================= HEADER ================= -->
<header>
  <div class="header-top">
    <div class="logo">
      <img src="images/logo.jpg" alt="Faith Deliverance Tabernacle Logo">
    </div>

    <!-- NAV -->
    <nav class="nav">
      <!-- HAMBURGER (mobile) -->
      <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- NAV LINKS -->
      <ul id="nav-links">
        <li><a href="index.php" class="<?= $current_page=='index.php'?'active':'' ?>">Home</a></li>
        <li><a href="about.php" class="<?= $current_page=='about.php'?'active':'' ?>">About</a></li>
        <li><a href="ministries.php" class="<?= $current_page=='ministries.php'?'active':'' ?>">Ministries</a></li>
        <li><a href="counseling.php" class="<?= $current_page=='counseling.php'?'active':'' ?>">Counseling</a></li>
        <li><a href="prayer.php" class="<?= $current_page=='prayer.php'?'active':'' ?>">Prayer</a></li>
        <li><a href="events.php" class="<?= $current_page=='events.php'?'active':'' ?>">Events</a></li>
        <li><a href="membership.php" class="<?= $current_page=='membership.php'?'active':'' ?>">Join Us</a></li>
        <li><a href="blessings.php" class="<?= $current_page=='blessings.php'?'active':'' ?>">Tithes & Offerings</a></li>
        <li><a href="contact.php" class="<?= $current_page=='contact.php'?'active':'' ?>">Contact Us</a></li>

        <!-- AUTH -->
        <?php if(isset($_SESSION['user_id'])): ?>
          <li class="welcome">Hi, <?= htmlspecialchars($_SESSION['username']) ?></li>
          <li><a href="dashboard.php" class="btn-auth">Dashboard</a></li>
          <li><a href="logout.php" class="btn-auth logout">Logout</a></li>
        <?php else: ?>
          <li><a href="login.php" class="btn-auth">Login</a></li>
          <li><a href="register.php" class="btn-auth register">Register</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>

  <!-- DONATION BAR -->
  <div class="donation-bar">
    <span>Unable to join us? You can still support.</span>
    <a href="blessings.php"><button>Give Today</button></a>
  </div>
</header>
