<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBprocedural";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// Creating table

$sql = 'CREATE TABLE MyGuests(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
)';

if ($conn->query($sql) === TRUE) {
    echo 'Table MyGuests created successfully';
} else {
    echo 'Error creating table: ' . $conn->error;
}

$conn->close();
?>