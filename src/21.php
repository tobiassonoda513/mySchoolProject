<?php
// Define your database credentials here
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create a new PDO connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Set the PDO error mode to exception
PDO::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Example query: Select all records from a table called "students"
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "Student ID: " . $row["student_id"] . ", Name: " . $row["name"] . "\n";
    }
} else {
    echo "No records found.";
}
