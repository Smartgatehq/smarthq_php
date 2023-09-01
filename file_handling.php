<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Handling</title>
</head>
<body>

    <h1>PHP File Handling</h1>

    <p>File handling is an important part of any web application. You often need to open and process a file for different tasks.</p>
    

    <?php 

    // to display the text saved in another file called webdict.text
    echo readfile('webdict.txt');
    ?>

    <p><i>Example 2</i></p>

    <?php

        $myfile = fopen("webdict.txt", 'r') or die('unable to open file!');
        echo fread($myfile, filesize('webdict.txt'));
        fclose($myfile);

// <?php
// $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);
// 

?>



</body>
</html>