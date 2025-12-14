<?php
$pageTitle = "Ministries";
require_once 'config/db.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';
?>

<main class="container">
    <h1>Our Ministries</h1>
    
    <div class="ministry-grid">
        <div class="ministry-card">
            <h3>Worship & Music</h3>
            <p>Lead congregational worship</p>
        </div>
        
        <div class="ministry-card">
            <h3>Youth Ministry</h3>
            <p>Ages 13-30 fellowship</p>
        </div>
        
        <div class="ministry-card">
            <h3>Children's Church</h3>
            <p>Sunday programs for kids</p>
        </div>
        
        <div class="ministry-card">
            <h3>Prayer Team</h3>
            <p>Intercessory prayer ministry</p>
        </div>
        
        <div class="ministry-card">
            <h3>Outreach</h3>
            <p>Community service projects</p>
        </div>
        
        <div class="ministry-card">
            <h3>Hospitality</h3>
            <p>Welcome visitors and members</p>
        </div>
    </div>
    
    <div class="cta">
        <p>Interested in serving?</p>
        <a href="contact.php" class="btn">Contact Us</a>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>