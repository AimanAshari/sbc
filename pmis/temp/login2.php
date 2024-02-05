<?php
// Assuming you have a database connection
$servername = "sql207.infinityfree.com";
$username = "if0_35788528";
$password = "Kelantan2024";
$dbname = "if0_35788528_crud";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform validation and hashing (for security, not included in this basic example)
    
    $sql = "SELECT * FROM members WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect or perform necessary actions
        header('location:home.php');
        
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>