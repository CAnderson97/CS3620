<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    echo "hello world<br>";
    echo "hello world<br>";
    $greeting = "Hello";
    $target = "World";
    $phrase = $greeting . " " . $target;
    echo $phrase
?>
<br>
<?php
    echo "$phrase Again<br>";
    echo "{$phrase} Again<br>";
?>
</body>
</html>