 <?php
include('connect.php'); // Assuming this file has the database connection code

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS Hostel (
    id INT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    hid INT,
    room INT,
    email VARCHAR(255) NOT NULL,
    mobile INT




)";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Table 'student' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
