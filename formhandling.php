<?php 
echo $_POST["name"]; 

echo $_POST["email"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>

<form action="" method="post">

Name: <input type="text" name="name"> <br>
E-mail: <input type="email" name="email"> <br>
<input type="submit">
</form>    
</body>

</html>

