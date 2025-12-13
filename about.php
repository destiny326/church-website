<?php
$pageTitle = "About Us";
require_once 'config/db.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main class="container">
    <h1>About Our Church</h1>
    
    <section class="content-card">
        <h2>Who We Are</h2>
        <p>Faith Deliverance Tabernacle is a Christ-centered community dedicated to worship, fellowship, and service.</p>
    </section>
    
    <section class="content-card">
        <h2>Our Mission</h2>
        <ul>
            <li>Preach biblical truth</li>
            <li>Build spiritual community</li>
            <li>Serve our neighbors</li>
        </ul>
    </section>
    
    <section class="content-card">
        <h2>Our Pastors</h2>
        <p><strong>Senior Pastor Edwin Abraham</strong> and <strong>Associate Pastor Kendell Charles</strong> lead our church with passion for God and compassion for people.</p>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>