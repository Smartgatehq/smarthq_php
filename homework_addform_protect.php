<?php

// include "homework.regform_db.php"

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Add_details";

// Create connection

// Once a connection is created, this code can be deleted
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Create database
// $sql = "CREATE DATABASE Add_details";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $conn->close();

// Creating table

// $sql = 'CREATE TABLE regdetails(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL,
//     password VARCHAR(30) NOT NULL,
//     reg_date TIMESTAMP
// )';

// if ($conn->query($sql) === TRUE) {
//     echo 'Table  created successfully';
// } else {
//     echo 'Error creating table: ' . $conn->error;
// }


// Codes to ensure details are added whe the form is submitted

if(isset($_POST['submit'])){
   
    $username = $_POST['username'];
    $password =  $_POST['password'];

    //to encrypt password

    $hash = password_hash($password,PASSWORD_DEFAULT);


   // $sql = "INSERT INTO regdetails (username, password) VALUES ('$username', '$hash')";
 
   $stmt = $conn->prepare("INSERT INTO regdetails (username, password) VALUES (?,?)");

   $stmt->bind_param("ss", $username, $hash);

    if ($stmt->execute()) {
     echo "Details added Successfully";
 }else {
     echo "Details not added";
 } 

 }

$conn->close();

?>
  
  