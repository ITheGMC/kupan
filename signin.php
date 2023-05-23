<?php

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$conn = new mysqli('localhost', 'root', '', 'database');

if($conn->connect_error) {
    die('connection failed :'.$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into login_details(username, password, email)
    values(?, ?, ?)");
    $stmt->bind_param("sss",$username, $password, $email);
    $stmt->execute();
    
    echo "<h1>Registration Successfully Completed</h1>";
    
    $stmt->close();
    
    $conn->close();
    
    header("Location: main.html");
    
}

?>

