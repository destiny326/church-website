<?php
$pageTitle = "About Us";
require_once 'config/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/about.css" />
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
</head>


<!-- HEADER -->
  <header>
    <div class="header-top">
      <div class="logo">
        <img src="images/logo.jpg" alt="Faith Deliverance Tabernacle Logo">
      </div>

      

      <!-- NAV -->
      <nav class="nav">
        <!-- HAMBURGER (mobile only) -->
        <div class="hamburger" id="hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <!-- LINKS -->
        <ul id="nav-links">
         <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>"> About</a></li>
            <li><a href="ministries.php" class="<?php echo $current_page == 'ministries.php' ? 'active' : ''; ?>">Ministries</a></li>
            <li><a href="counseling.php" class="<?php echo $current_page == 'counseling.php' ? 'active' : ''; ?>"> Counseling</a></li>
            <li><a href="prayer.php" class="<?php echo $current_page == 'prayer.php' ? 'active' : ''; ?>"> Prayer</a></li>
            <li><a href="events.php" class="<?php echo $current_page == 'events.php' ? 'active' : ''; ?>"> Events</a></li>
            <li><a href="membership.php" class="<?php echo $current_page == 'membership.php' ? 'active' : ''; ?>"> Join Us</a></li>
            <li><a href="blessings.php" class="<?php echo $current_page == 'blessings.php' ? 'active' : ''; ?>"> Tithes & Offerings</a></li>
            <li><a href="contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>"> Contact Us</a></li>
        
     

            <!-- Login/Logout Button -->
            
                <?php if(isset($_SESSION['user_id'])): ?>
                    <div class="user-welcome">
                        <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</span>
                        <a href="dashboard.php" class="btn-auth">Dashboard</a>
                        <button><a href="logout.php" class="btn-auth logout">Logout</a></button>
                    </div>
                <?php else: ?>
                    <div class="login-buttons">
                      <li><button> <a href="login.php" class="btn-auth"> Login</a></li></button>
                     <li><button><a href="register.php" class="btn-auth register"> Register</a></button></li>
                    </div>
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
  
<body>
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
         <img src="images/sr-pastor.jpeg" alt="Pastor">
        <div class="container">
         <h4><b>Edwin Abraham - Senior Pastor</b></h4>
        <p>Pastor Abraham provides spiritual leadership and overall vision for the church. 
        He is responsible for preaching and teaching the Word of God, guiding the congregation in faith, 
        and overseeing ministry operations. Through prayer, leadership, and pastoral care,
         the Senior Pastor equips members to grow spiritually and live out Christ's teachings
          in everyday life.</p>
   </div>
 </div>

 <div class="card">
  <img src="images/jr pastor.jpeg" alt="Junior Pastor">
  <div class="container">
    <h4><b>Kendell Charles - Junior Pastor</b></h4> 
    <p>Pastor Charles supports the Senior Pastor in ministry and leadership responsibilities.
         He assist with teaching, outreach programs, youth and family engagement, and pastoral care. 
         Pastor Charles plays a key role in mentoring members, strengthening church activities, 
         and helping the congregation grow in faith and service.</p> 
  </div>
</div>


</body>
</html>


<footer><?php require_once 'includes/footer.php'; ?></footer>