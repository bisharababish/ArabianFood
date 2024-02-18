<?php
session_start();

include("DatabaseConnection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";

    $feedback_message = $_POST['message'];

    // Insert feedback into the database
    if (!empty($feedback_message) && !empty($email)) {
        $query = "UPDATE form SET feedback_message='$feedback_message' WHERE email='$email'";
        mysqli_query($conn, $query);

        // Redirect back to contactus.php after submission
        header("Location: contactus.php");
        exit();
    } else {
        echo "<script type='text/javascript'> alert('Please Enter Some Feedback')</script>";
        // Redirect back to contactus.php if there is no feedback message
        header("Location: contactus.php");
        exit();
    }
}
?>