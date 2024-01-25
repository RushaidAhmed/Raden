<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if(isset($_POST['submit'])) {
    // Prepare and bind
    $stmt = $connection->prepare("INSERT INTO schedule (name, specialization, days, time) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $specialization, $days, $time);

    // Set parameters and execute
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $days = $_POST['days'];
    $time = $_POST['time'];

    if($stmt->execute()) {
        echo "New record added!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$connection->close();
?>
