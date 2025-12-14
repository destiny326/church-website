<?php
$pageTitle = "Home";
require_once 'config/db.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main class="container">
    <div class="simple-hero">
        <h1>Faith Deliverance Tabernacle</h1>
        <p>Worship • Community • Hope</p>
    </div>
    
    <div class="center-content">
        <h2>Sunday Service 10:30 AM</h2>
        <p>Mont Toute Road, Grand Anse</p>
        
        <div class="simple-links">
            <a href="about.php" class="btn">About Us</a>
            <a href="events.php" class="btn">Services</a>
            <a href="contact.php" class="btn">Contact</a>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>