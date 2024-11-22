<?php
// Database connection details
// Database connection details
$servername = "CS3-DEV.ICT.RU.AC.ZA";
$username = "HouseStark";  // database username
$password = "H6zmX3B0";      //  database password
$dbname = "";  // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];

$email = $_POST['email'];
$message = $_POST['message'];


// Insert data into the database
$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$surname', '$message')";

if ($conn->query($sql) === TRUE) {
    echo " successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
