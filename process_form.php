<?php
require_once 'config/db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form_type = $_POST['form_type'] ?? '';
    $response = [];
    
    switch($form_type) {
        case 'prayer':
            // Process prayer request
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $request = mysqli_real_escape_string($conn, $_POST['request']);
            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
            
            $sql = "INSERT INTO prayer_requests (user_id, name, email, request) 
                    VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "isss", $user_id, $name, $email, $request);
            
            if(mysqli_stmt_execute($stmt)) {
                $response = ['success' => true, 'message' => 'Prayer request submitted successfully!'];
            } else {
                $response = ['success' => false, 'message' => 'Error submitting request.'];
            }
            break;
            
        case 'counseling':
            // Process counseling request
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $type = mysqli_real_escape_string($conn, $_POST['type']);
            $message = mysqli_real_escape_string($conn, $_POST['message']);
            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
            
            $sql = "INSERT INTO counseling_requests (user_id, name, email, type, message) 
                    VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "issss", $user_id, $name, $email, $type, $message);
            
            if(mysqli_stmt_execute($stmt)) {
                $response = ['success' => true, 'message' => 'Counseling request submitted successfully!'];
            } else {
                $response = ['success' => false, 'message' => 'Error submitting request.'];
            }
            break;
            
        case 'membership':
            // Process membership application
            $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $interest = mysqli_real_escape_string($conn, $_POST['interest']);
            $baptized = mysqli_real_escape_string($conn, $_POST['baptized']);
            $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
            
            $sql = "INSERT INTO membership_applications (user_id, full_name, email, phone, interest, baptized) 
                    VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "isssss", $user_id, $full_name, $email, $phone, $interest, $baptized);
            
            if(mysqli_stmt_execute($stmt)) {
                $response = ['success' => true, 'message' => 'Membership application submitted successfully!'];
            } else {
                $response = ['success' => false, 'message' => 'Error submitting application.'];
            }
            break;
            
        case 'contact':
            // Process contact form
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $subject = mysqli_real_escape_string($conn, $_POST['subject']);
            $message = mysqli_real_escape_string($conn, $_POST['message']);
            
            $sql = "INSERT INTO contact_messages (name, email, subject, message) 
                    VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);
            
            if(mysqli_stmt_execute($stmt)) {
                $response = ['success' => true, 'message' => 'Message sent successfully!'];
            } else {
                $response = ['success' => false, 'message' => 'Error sending message.'];
            }
            break;
            
        default:
            $response = ['success' => false, 'message' => 'Invalid form type.'];
    }
    
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>