<?php

$servername = "Localhost";
$username = "root"; // default username for xamp
$password = ""; // default password for xampp is empty


// create connection

$conn = new mysqli($servername, $username, $password);

// check connection
if($conn->connect_error){
    die('connection failed: '. $conn->connect_error);
}
echo "Connection Successful!"



// USING PDO

// $servername = 'localhost';
// $username = 'username';
// $password = 'password';

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
//     // set the PDO to error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connected successfully";
// } catch(PDOException $e){
//     echo "Connection failed: " . $e->getMessage();
// }

?>