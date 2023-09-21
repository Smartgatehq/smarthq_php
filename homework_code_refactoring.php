<?php 
include "homework_regform_db.php";

function executeQuery($sql){
    global $conn;
    if ($conn->query($sql) == true) {
    return true;
} else {
    die("error exacuting:" . $conn->error);
}

}

?>

