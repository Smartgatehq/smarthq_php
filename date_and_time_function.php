<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The PHP Date() Function</title>
</head>
<body>
    <h1>The PHP Date() Function</h1>


    <?php
        echo "Todat is ". date("Y/m/d") . "<br>";
        echo "Today is ". date("y.m.d") . "<br>";
        echo "Today is ". date("y-m-d") . "<br>";
        echo "Today is ". date("l") . "<br>";
    ?>


    <h3>PHP Tip - Automatic Copyright Year</h3>

    <p>Use the date() function to automatically update the copyright year on your website:</p>
    
    &copy; 2020-<?php echo date("Y");?>

    <h3>Setting Time Zone</h3>

    <?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>
</body>
</html>