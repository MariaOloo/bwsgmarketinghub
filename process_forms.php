<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quote_requests";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$service = $_POST['service'];
$time_period = $_POST['time_period'];
$specify = $_POST['specify'];

// SQL query to insert data
$sql = "INSERT INTO quote_requests (name, email, service, time_period, specify) VALUES ('$name', '$email', '$service', '$time_period', '$specify')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
