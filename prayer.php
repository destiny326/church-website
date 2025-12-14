<?php
$pageTitle = "Prayer";
require_once 'config/db.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
    $request = mysqli_real_escape_string($conn, $_POST['request']);
    
    $sql = "INSERT INTO prayer_requests (name, email, request) VALUES ('$name', '$email', '$request')";
    mysqli_query($conn, $sql);
    $success = "Prayer request submitted. Our team will pray for you.";
}
?>

<main class="container">
    <h1>Prayer Requests</h1>
    
    <section class="content-card">
        <h2>Share Your Prayer Need</h2>
        <p>We believe in the power of prayer. Share your request and our team will pray for you.</p>
        
        <?php if (isset($success)): ?>
            <div class="alert success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <form method="POST" class="prayer-form">
            <div class="form-group">
                <label>Your Name *</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Email (optional)</label>
                <input type="email" name="email">
            </div>
            
            <div class="form-group">
                <label>Prayer Request *</label>
                <textarea name="request" rows="4" required></textarea>
            </div>
            
            <button type="submit" class="btn">Submit Prayer</button>
        </form>
    </section>
    
    <section class="content-card">
        <h3>Prayer Meetings</h3>
        <p>Join us for prayer:</p>
        <ul>
            <li>Saturday: 8:00 AM</li>
            <li>Wednesday: 7:00 PM</li>
        </ul>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>