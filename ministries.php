<?php
$pageTitle = "Ministries";
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/ministries.css">
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="container page-content">

    <h1>Our Ministries</h1>

    <div class="ministry-grid">

        <div class="ministry-card">
            <img src="images/choir.jpeg" alt="Singing choir">
            <h3>Worship & Music</h3>
            <p>Lead congregational worship</p>
        </div>

        <div class="ministry-card">
            <img src="images/youth.jpeg" alt="Youth ministry">
            <h3>Youth Ministry</h3>
            <p>Ages 13-30 fellowship</p>
        </div>

        <div class="ministry-card">
            <img src="images/chirldren-church.jpeg" alt="Children's Church">
            <h3>Children's Church</h3>
            <p>Sunday programs for kids</p>
        </div>

        <div class="ministry-card">
            <img src="images/prayer.jpeg" alt="Prayer ministry">
            <h3>Prayer Team</h3>
            <p>Intercessory prayer ministry</p>
        </div>

        <div class="ministry-card">
            <img src="images/outreach.jpeg" alt="Community outreach">
            <h3>Outreach</h3>
            <p>Community service projects</p>
        </div>

        <div class="ministry-card">
            <img src="images/hospitality.jpeg" alt="Hospitality ministry">
            <h3>Hospitality</h3>
            <p>Welcoming visitors and members</p>
        </div>

    </div>

    <div class="cta">
        <p>Interested in serving?</p>
        <a href="contact.php" class="btn">Contact Us</a>
    </div>

</main>

<?php require_once 'includes/footer.php'; ?>

<script src="js/header.js"></script>
</body>
</html>
