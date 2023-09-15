<?php
include 'mydb1.php'
?>


<?php

//Table has been created before so no need to create again

// using the Table called database called customer and table named users

// sql to update a record
$sql = "UPDATE users SET CustomerName='Nathan Ose', ContactName='Ose lele' WHERE CustomerID=2";

if ($conn->query($sql) === TRUE) {
  echo "Updated successfully";
} else {
  echo "Error Updating record: " . $conn->error;
}

$conn->close();


?>