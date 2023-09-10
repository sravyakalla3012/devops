<?php
// Database connection parameters
$servername = "localhost:8080";
$username = "sri lakshmi";
$password = "omesrilakshmi";
$dbname = "atm system";

// Create connection
$conn = new mysqli('localhost:8080','sri lakshmi','omesrilakshmi','atm system');

// Check connection
if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}

// Get user input
$account_number = $_POST['account_number'];
$pin_number= $_POST['pin_number'];

// Prepare and execute SQL query
$sql = "SELECT * FROM amount WHERE account_number='$account_number' AND pin_number='$pin_number'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Valid credentials, user logged in
    echo "Login Successful";
    //header("Location:book.html");
   // exit;
} else {
    // Invalid credentials
    echo "Invalid credentials. Please try again.";
}

// Close the database connection
$conn->close();
?>

