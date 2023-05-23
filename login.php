<?php 


$sel = "SELECT * FROM login_details";
$query =  mysqli_query($conn,$sel);
$resul = mysqli_fetch_assoc($query);



$username = $_POST['username'];
$password = $_POST['password'];
$con = new mysqli("localhost","root", "", "database");
if ($con->connect_error) {
    die("Failed to connect with GMC servers : ".$con->connect_error);
} else {
    $stmt = $con->prepare("select * from login_details where username =?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password) {
       echo "<h1>Success</h1>";
       header("Location: main.html");
exit;
        }
        else {
            echo "<h1>INvalid</h1>";
        }
    } else {
        echo "<h1>Invalid bruhhh</h1>";
        
    }

}


?>
