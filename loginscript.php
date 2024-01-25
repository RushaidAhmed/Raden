<?php
// Start the session
session_start();

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logininfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Protect against SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database
    $sql = "SELECT username FROM credential WHERE username = '$username' AND pass = '$password'";
    $result = $conn->query($sql);

    // Check if user exists
    if ($result->num_rows > 0) {
        // User found, start a session
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        // Redirect user to welcome page (or another page)
        header("location: editbookings.php");
    } else {
        // User not found, display an error message
        echo "Incorrect username or password.";
    }
}

$conn->close();
?>
