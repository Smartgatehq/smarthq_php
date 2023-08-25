<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate Arrays</title>
</head>
<body>
    
    <h1>Associate Arrays</h1>
    <p>Associative arrays are arrays that use named keys that you assign to them.</p>

    <p><i>Example 1</i></p>

    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.";
    ?>

    <p><i>Example 2</i></p>

    <?php

        $age = array("Smart" => 35, "Edric" => 44, "food" =>100,);

        echo "Smart is " . $age['Smart'] . " Years Old"; 
        echo "<br>";
        echo "Smart is " . $age['Edric'] . " Years Old";

    ?>


    <h3>Loop Through an Associative Array</h3>
    <p>To loop through and print all the values of an associative array, you could use a foreach loop, like this:</p>

    <p><i>Example 3</i></p>

    <?php
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
        }
    ?>

<p><i>Example 3</i></p>

    <?php

        //$number = array[]

        $numbers = array(101,505,463,3738,3664,3782,);
        //echo $numbers [1];

        print_r($numbers);

        echo "<br>"; echo "<br>";

        $names = array("JOHN", "SMART", "GRACE", 455,215,355,);
        echo $names[1];

        //print_r($names);

    ?>



</body>
</html>