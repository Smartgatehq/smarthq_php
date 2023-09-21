<?php

include "homework_regform_db.php";
include "homework_code_refactoring.php";

function createUser($username, $password){
    global $conn;

    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "INSERT INTO regdetails(username, password) VALUES ('$username', '$password')";
    return executeQuery($sql);
}
?>