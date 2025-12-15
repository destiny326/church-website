<?php
$pageTitle = "Contact";
require_once 'config/db.php';
require_once 'includes/header.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    mysqli_query($conn, $sql);
    $success = "Message sent! We'll respond soon.";
}
?>

<main class="container">
    <h1>Contact Us</h1>
    
    <div class="contact-info">
        <div class="info-card">
            <h3>Location</h3>
            <p>Mont Toute Road, Grand Anse</p>
            <p>St. George, Grenada</p>
        </div>
        
        <div class="info-card">
            <h3>Service Times</h3>
            <p>Sunday: 10:30 AM</p>
            <p>Wednesday: 7:00 PM</p>
        </div>
        
        <div class="info-card">
            <h3>Contact</h3>
            <p>Email: info@faithdeliverance.com</p>
            <p>Phone: (473) 123-4567</p>
        </div>
    </div>
    
    <section class="content-card">
        <h2>Send a Message</h2>
        
        <?php if (isset($success)): ?>
            <div class="alert success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <form method="POST" class="contact-form">
            <div class="form-group">
                <label>Name *</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject">
            </div>
            
            <div class="form-group">
                <label>Message *</label>
                <textarea name="message" rows="4" required></textarea>
            </div>
            
            <button type="submit" class="btn">Send Message</button>
        </form>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>