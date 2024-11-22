<?php
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
$surname = $_POST['surname'];
$email = $_POST['email'];
$location = $_POST['location'];
$service  = $_POST['service'];
$date   = $_POST['date'];
$time = $_POST['time'];

// Insert data into the database
$sql = "INSERT INTO bookings (name, surname, email, location,service,date ,time) VALUES ('$name', '$surname', '$email', '$location','$service','$date','$time')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
