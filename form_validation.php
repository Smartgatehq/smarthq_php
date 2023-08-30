<?php
//define variables and set to empty values

$name = "";
$email = ""; 
$gender = "";
$comment = "";
$website = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);


}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

} 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name"> <br>
E-mail: <input type="email" name="email"> <br>
Website <input type="text" name="website"> <br>
comment: <textarea name="comment" id="" cols="30" rows="10"></textarea><br>
Gender: <input type="radio" name="gender" value="female"> Female
<input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Others"> Others <br>
<input type="submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>

</html>
