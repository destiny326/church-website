<?php
$pageTitle = "About Us";
require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $pageTitle ?></title>

  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="icon" type="image/x-icon" href="images/logo.jpg">
</head>

<body>

<?php require_once 'includes/header.php'; ?>

<main class="page-content">

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

  <div class="card">
    <img src="images/sr-pastor.jpeg" alt="Senior Pastor">
    <div class="container">
      <h4><b>Edwin Abraham - Senior Pastor</b></h4>
      <p>
        Pastor Abraham provides spiritual leadership and overall vision for the church.
        He is responsible for preaching and teaching the Word of God, guiding the congregation in faith,
        and overseeing ministry operations.
      </p>
    </div>
  </div>

  <div class="card">
    <img src="images/jr pastor.jpeg" alt="Junior Pastor">
    <div class="container">
      <h4><b>Kendell Charles - Junior Pastor</b></h4>
      <p>
        Pastor Charles supports the Senior Pastor in ministry and leadership responsibilities.
        He assists with teaching, outreach programs, youth and family engagement, and pastoral care.
      </p>
    </div>
  </div>

</main>

<?php require_once 'includes/footer.php'; ?>

<script src="js/header.js"></script>

</body>
</html>
