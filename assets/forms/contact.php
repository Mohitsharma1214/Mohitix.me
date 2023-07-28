<?php
// Database connection details
$servername = "localhost";
$username = "mohitixm_mohit";
$password = "Mohit@7879";
$dbname = "contactusdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Insert the data into the ContactUsInfo table
$sql = "INSERT INTO ContactUsInfo (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Data stored successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
