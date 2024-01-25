<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "booking";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if 'deletename' parameter is set in the URL
if (isset($_GET['deletename'])) {
    $deletename = $_GET['deletename'];

    // Use a prepared statement to delete the record
    $stmt = $connection->prepare("DELETE FROM schedule WHERE name = ?");
    $stmt->bind_param("s", $deletename);

    if ($stmt->execute()) {
        echo "Record with name '$deletename' has been successfully deleted.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
}

$connection->close();
?>
