<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // User is logged in, do something here
    echo "Welcome back, " . $_SESSION['username'] . "!";
} else {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// To remember that the user has logged in, set the session variable
$_SESSION['loggedin'] = true;
$_SESSION['username'] = "example_user";
?>
