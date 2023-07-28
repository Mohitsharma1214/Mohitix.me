<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'mohitixm_mohit';
$dbPassword = 'Mohitsharma787911';
$dbName = 'mohitixm_contactus	';

// Connect to the database
$conn = mysqli_connect($localhost, $, $dbPassword, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Sanitize form data
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$message = mysqli_real_escape_string($conn, $message);

// Insert form data into database
$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
if (mysqli_query($conn, $sql)) {
  echo "Thank you for contacting us!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
