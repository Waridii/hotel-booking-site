<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$rooms = $_POST['rooms'];


$sql = "INSERT INTO availability (Checkin, Checkout, Adults,Children, Rooms)
VALUES ('$checkin', '$checkout', '$adults', '$children', '$rooms')";

if ($conn->query($sql) === TRUE) {
    echo "Confirmation successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
