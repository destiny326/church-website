<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Faith Deliverance Tabernacle</title>
  <link rel="stylesheet" href="css/index.css" />
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="header-top">
      <div class="logo">
        <img src="images/logo.jpg" alt="Faith Deliverance Tabernacle Logo">
      </div>

      <p class="name">
        Faith <br>
        Deliverance <br>
        Tabernacle
      </p>

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
          <li><a href="index.html">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="membership.php">Join Us</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li>
            <a href="register.php">
              <button type="button" class="register-btn">Sign Up</button>
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <!-- DONATION BAR -->
    <div class="donation-bar">
      <span>Unable to join us? You can still support.</span>
     <a href="blessings.php"><button>Give Today</button></a>
    </div>
  </header>

  <!-- HERO -->
  <section id="home" class="hero section">
    <div class="hero-content">
      <h1>Faith Deliverance Tabernacle</h1>
      <p>Growing together in Christ.</p>

      <div class="btn-group">
        <a href="https://maps.app.goo.gl/hHZzGQmMMfDH13oU8" target="_blank"><button>VISIT US</button></a>
        <a href="membership.php"><button>GROW WITH US</button></a>
      </div>

    
      <div class="service-info">
        <div class="service-box">
          <h3>Service Times</h3>
          <p>Sunday @ 10:30 AM</p>
        </div>

        <div class="service-box">
          <h3>Location</h3>
          <p>Mont Toute Road, Grand Anse. St. George</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SCRIPTS -->
  <script>
    /* HEADER HIDE ON SCROLL */
    let lastScrollY = window.scrollY;
    const header = document.querySelector("header");

    window.addEventListener("scroll", () => {
      if (window.scrollY > lastScrollY && window.scrollY > 100) {
        header.classList.add("hide");
      } else {
        header.classList.remove("hide");
      }
      lastScrollY = window.scrollY;
    });

    /* HAMBURGER TOGGLE */
    const hamburger = document.getElementById("hamburger");
    const navLinks = document.getElementById("nav-links");

    hamburger.addEventListener("click", () => {
      navLinks.classList.toggle("active");
    });

    /* CLOSE MENU ON LINK CLICK (mobile) */
    document.querySelectorAll("#nav-links a").forEach(link => {
      link.addEventListener("click", () => {
        navLinks.classList.remove("active");
      });
    });
  </script>

</body>
</html>
<?php require_once 'includes/footer.php'; ?>