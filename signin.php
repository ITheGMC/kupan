<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $email = $_POST['email'];

    $conn = new mysqli('sql109.infinityfree.com', 'if0_35546577', 'PR7EDvQnK6TWd', 'if0_35546577_database');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $response = array();

        $response['username'] = isFieldTaken($conn, 'log_data', 'username', $username) ? "taken" : "available";

        $response['email'] = isFieldTaken($conn, 'log_data', 'email', $email) ? "taken" : "available";

        $response['number'] = isFieldTaken($conn, 'log_data', 'number', $number) ? "taken" : "available";

        if ($response['username'] === "taken" || $response['email'] === "taken" || $response['number'] === "taken") {
            echo json_encode($response);
        } else {
            
            $stmt = $conn->prepare("INSERT INTO log_data(name, username, password, number, email)
                                    VALUES(?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $username, $password, $number, $email);
            $stmt->execute();

            echo json_encode(array('status' => 'success', 'message' => 'Registration Successfully Completed'));
            header("Location: main.html");
            $stmt->close();
        }

        $conn->close();
    }
}

function isFieldTaken($conn, $table, $field, $value) {
    $stmt = $conn->prepare("SELECT $field FROM $table WHERE $field = ?");
    $stmt->bind_param("s", $value);
    $stmt->execute();
    $stmt->store_result();
    return $stmt->num_rows > 0;
}
?>