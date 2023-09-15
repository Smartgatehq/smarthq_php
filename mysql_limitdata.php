
<?php

include 'mydb1.php'
?>

<?php
//Table has been created before so no need to create again

// using the Table called database called customer and table named users

$sql = "SELECT CustomerID, CustomerName, ContactName, Address, City FROM users LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> id: ". $row["CustomerID"]. " - Name: ". $row["CustomerName"]. " contact: " . $row["ContactName"] . "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>



