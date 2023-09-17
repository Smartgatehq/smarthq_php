<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Add_details";

// Create connection
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

    echo $username;
    echo $password;
 
    if($connection){
     echo "Details added Successfully";
 }else {
     echo "Details not added";
 }
 
  
 $querry = "INSERT INTO Add_details (username, password)";
 $query .= "VALUE('$username', '$password')";

    $result = mysqli_query($connection, $query);
    
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
 
 }

$conn->close();

?>
  
  
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
          <meta charset="utf-8">
          <title>My Login Form</title>
          <!--Google  fonts-->
          <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="css/regform.css">
          <script src="https://kit.fontawesome.com/bc18bf7a86.js" crossorigin="anonymous"></script>
          <script src="javascript/script.js"></script>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="icon" href="images/favicon.ico">
  </head>
  
  <body>
      <form action="homework_regform.php" method="post">
          <div class="my-form">
              <div class="text">
                  <p>Choose your <strong>Username</strong> and <strong>Password</strong> below</p>
              </div>
              <div class="form-field">
                  <label for="username">Username: <br>
                      <input 
                          type="text" 
                          name="username" 
                          id="username"  
                          placeholder="Enter Username"
                          autocomplete="off"
                          size="40"
                          required
                      >
                  </label>
              </div>
              <div class="form-field">
                  <label for="password">Password: <br>
                      <input 
                          type="password" 
                          name="password" 
                          d="password"  
                          placeholder="Choose password"
                          autocomplete="off"
                          size="40"
                          required
                      >
                  </label>
              </div>
              <div class="btn">
                  <input class="button" type="submit" name="submit" id="submit">
              </div>
          </div>
      </form>
  </body>
  </html>