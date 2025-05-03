<?php
session_start();
include("connect.php");

// Check if the user is logged in
if ($_SESSION['name'] == '') {
    header("location:signin.php");
    exit(); // Exit after redirecting
}

// Check if the notification ID is set
if (isset($_POST['id'])) {
    $notificationId = intval($_POST['id']);
    
    // Update the notification to mark it as read
    $update_query = "UPDATE notifications SET is_read = 1 WHERE id = $notificationId";
    mysqli_query($connection, $update_query);
}
?>