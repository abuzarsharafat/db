<?php
// Database connection parameters
$host = '127.0.0.1';
$username = 'root';
$password = 'Zaree3520s';
$database = 'mausak_hope_web';
$table = 'member_source';

// Retrieve data from POST request
$mhid = $_POST['mhid'];
$name = $_POST['name'];
$amount = $_POST['amount'];
$donationType = $_POST['donationType'];
$donationDate = $_POST['donationDate'];

// Connect to MySQL database
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

// Prepare SQL statement
$sql = "INSERT INTO $table (mhid, name, amount, donation_type, donation_date) 
        VALUES (?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sssss", $mhid, $name, $amount, $donationType, $donationDate);

// Execute the statement
if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

// Close statement and connection
$stmt->close();
$mysqli->close();
?>
