<?php
// Database configuration
$dbHost = 'localhost';  // Replace with your MySQL host
$dbUsername = 'root';  // Replace with your MySQL username
$dbPassword = '';  // Replace with your MySQL password
$dbName = 'script';  // Replace with your MySQL database name

// Create database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $reservation_date = $_POST['reservation-date'];
    $reservation_time = $_POST['reservation-time'];
    $message = $_POST['message'];

    // Insert data into database
    $sql = "INSERT INTO reservations (name, phone, reservation_date, reservation_time, message)
            VALUES ('$name', '$phone', '$reservation_date', '$reservation_time', '$message')";

    // Perform the query
    if ($conn->query($sql) === TRUE) {
        echo "Reservation successfully booked.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
