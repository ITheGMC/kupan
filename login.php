<?php
session_start();

$con = new mysqli("sql109.infinityfree.com", "if0_35546577", "PR7EDvQnK6TWd", "if0_35546577_database");

if ($con->connect_error) {
    die("Failed to connect with the database: " . $con->connect_error);
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT * FROM log_data WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            

            header("Location: main.html");
            exit;
        } else {
            echo "<script>alert('Invalid password');</script>";
        }
    } else {
        echo "<script>alert('Invalid username');</script>";
    }
}
?>
