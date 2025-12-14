<?php
$pageTitle = "Counseling";
require_once 'config/db.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    
    $sql = "INSERT INTO counseling_requests (name, email, type, message) VALUES ('$name', '$email', '$type', '$message')";
    mysqli_query($conn, $sql);
    $success = "Request submitted! We'll contact you soon.";
}
?>

<main class="container">
    <h1>Counseling Services</h1>
    
    <section class="content-card">
        <h2>Get Support</h2>
        <p>Our trained counselors offer faith-based guidance for life's challenges.</p>
        
        <?php if (isset($success)): ?>
            <div class="alert success"><?php echo $success; ?></div>
        <?php endif; ?>
        
        <form method="POST" class="counseling-form">
            <div class="form-group">
                <label>Name *</label>
                <input type="text" name="name" required>
            </div>
            
            <div class="form-group">
                <label>Email *</label>
                <input type="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label>Type of Counseling</label>
                <select name="type" required>
                    <option value="">Select one</option>
                    <option value="Spiritual">Spiritual</option>
                    <option value="Marriage">Marriage</option>
                    <option value="Grief">Grief Support</option>
                    <option value="Youth">Youth/Family</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Message *</label>
                <textarea name="message" rows="4" required></textarea>
            </div>
            
            <button type="submit" class="btn">Submit Request</button>
        </form>
    </section>
    
    <section class="content-card">
        <h3>Confidential & Compassionate</h3>
        <p>All sessions are private and rooted in biblical principles.</p>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>