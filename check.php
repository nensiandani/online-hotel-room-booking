<?php
include 'connection.php'; // Ensure this file connects to your database
session_start();

if (isset($_POST['checkAvailability'])) {
    // Capture form data
    $cin = $_POST['checkin'];
    $cout = $_POST['checkout'];
    $room = $_POST['room'];

    $qry = "INSERT INTO checkavail(checkin, checkout, room) VALUES ('$cin', '$cout', '$room')";
    $data = mysqli_query($con, $qry);   

if ($data) {
    echo '<script>alert("Available Room is Here."); window.location.href = room1.php";</script>';
} else {
    echo '<script>alert("Not Available. Please Try Again. Error: ' . mysqli_error($con) . '"); window.location.href = "index.php";</script>';
}

// Close the database connection
mysqli_close($con);
}
?>
