<?php
// Connect to the MySQL database
$host = 'localhost'; // Change to your MySQL server hostname
$username = 'root'; // Change to your MySQL username
$password = ''; // Change to your MySQL password (if any)
$database = 'user_registration'; // Change to your database name

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the HTML form
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

// Insert data into the database
$sql = "INSERT INTO user_registration (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $password);
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
