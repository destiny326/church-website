<?php
$pageTitle = "Dashboard";
require_once 'config/db.php';

// Require login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

require_once 'includes/header.php';
?>
<link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/dashboard.css">
<main class="container">
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
    
    <div class="dashboard-cards">
        <div class="card">
            <h3>Your Profile</h3>
            <p>Update your information</p>
            <a href="#" class="btn">Edit Profile</a>
        </div>
        
        <div class="card">
            <h3>Prayer Requests</h3>
            <p>View your prayer requests</p>
            <a href="prayer.php" class="btn">View</a>
        </div>
        
        <div class="card">
            <h3>Events</h3>
            <p>See upcoming events</p>
            <a href="events.php" class="btn">View Events</a>
        </div>
    </div>
    
    <?php if ($_SESSION['role'] == 'admin'): ?>
    <section class="content-card">
        <h2>Admin Panel</h2>
        <div class="admin-links">
            <a href="#" class="btn">View Messages</a>
            <a href="#" class="btn">Manage Events</a>
            <a href="#" class="btn">View Users</a>
        </div>
    </section>
    <?php endif; ?>
</main>

<?php require_once 'includes/footer.php'; ?>
<script src="js/header.js"></script>