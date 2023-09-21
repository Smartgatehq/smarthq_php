<?php

include "homework_refactor.php";

if(isset($_POST['submit'])){
   
    $username = $_POST['username'];
    $password =  $_POST['password'];

//calling the function

$result = createUser($username, $password);

}
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
      <form action="" method="post" enctype="multipart/form-data" >
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