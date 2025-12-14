<?php
$pageTitle = "Join Us";
require_once 'config/db.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process membership form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone'] ?? '');
    $interest = mysqli_real_escape_string($conn, $_POST['interest']);
    
    // Store in database (you can create a membership_applications table)
    $success = "Thank you! We'll contact you about membership.";
}
?>

<main class="container">
    <h1>Become a Member</h1>
    
    <section class="content-card">
        <h2>Join Our Church Family</h2>
        <p>We welcome you to grow with us in faith and fellowship.</p>
        
        <?php if (isset($success)): ?>
            <div class="alert success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <form method="POST" class="membership-form">
            <div class="form-group">
                <label>Full Name *</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Phone (optional)</label>
                <input type="tel" name="phone">
            </div>
            
            <div class="form-group">
                <label>Why do you want to join?</label>
                <textarea name="interest" rows="3"></textarea>
            </div>
            
            <button type="submit" class="btn">Submit Interest</button>
        </form>
    </section>
    
    <section class="content-card">
        <h3>Membership Benefits</h3>
        <ul>
            <li>Pastoral care and support</li>
            <li>Ministry service opportunities</li>
            <li>Member meetings and voting</li>
            <li>Church family community</li>
        </ul>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>