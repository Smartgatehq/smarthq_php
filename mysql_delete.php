<?php
include 'mydb1.php'
?>


<?php

//Table has been created before so no need to create again

// using the Table called database called customer and table named users

// sql to delete a record
$sql = "DELETE FROM users WHERE Country='USA' AND Country='Nigeria'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>