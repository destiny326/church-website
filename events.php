<?php
$pageTitle = "Events";
require_once 'config/db.php';
require_once 'includes/header.php';
require_once 'includes/navigation.php';

// Get events from database
$sql = "SELECT * FROM events WHERE event_date >= CURDATE() ORDER BY event_date LIMIT 5";
$result = mysqli_query($conn, $sql);
$events = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<main class="container">
    <h1>Upcoming Events</h1>
    
    <section class="content-card">
        <h2>Church Calendar</h2>
        
        <div class="events-list">
            <?php if (!empty($events)): ?>
                <?php foreach ($events as $event): ?>
                    <div class="event-item">
                        <div class="event-date">
                            <?php echo date('M j', strtotime($event['event_date'])); ?>
                        </div>
                        <div class="event-details">
                            <h3><?php echo htmlspecialchars($event['title']); ?></h3>
                            <p><?php echo date('g:i A', strtotime($event['start_time'])); ?> • <?php echo htmlspecialchars($event['location']); ?></p>
                            <p><?php echo htmlspecialchars($event['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No upcoming events scheduled.</p>
            <?php endif; ?>
        </div>
    </section>
    
    <section class="content-card">
        <h3>Weekly Schedule</h3>
        <ul>
            <li><strong>Sunday:</strong> Worship - 10:30 AM</li>
            <li><strong>Wednesday:</strong> Bible Study - 7:00 PM</li>
            <li><strong>Friday:</strong> Youth Night - 6:00 PM</li>
            <li><strong>Saturday:</strong> Prayer - 8:00 AM</li>
        </ul>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>