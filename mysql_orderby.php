<?php
include 'mydb1.php'
?>


<?php

//Table has been created before so no need to create again

// using the Table called database called customer and table named users

$sql = "SELECT CustomerID, CustomerName, ContactName, Address, City FROM users ORDER BY CustomerName DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    // fetching only the CustomerName and using h1 tag on it
    echo "<h1><br>Name: ". $row["CustomerName"]."<br></h1>";
  }
} else {
  echo "0 results";
}

$conn->close();


?>
