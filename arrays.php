<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $numbers = array(4,8,15,16,23,42);
        echo $numbers[0];
        $mixed = array(6, "fox", "dog", array("x", "y", "z"));
        $array = [1,2,3];
        echo $mixed[2];
        echo $mixed[3][1];
    ?>
    <br>
    <?php
        $assoc = array("first_name" => "Cody", "last_name" => "Squadroni");
        echo $assoc["first_name"] . " " . $assoc["last_name"];

        print_r($numbers);
    ?>
    <br>
    <?php
        $some_numbers = array(8,23,25,27,30,100);
        echo "Count: " . count($some_numbers);
        echo "<br>Max Value: " . max($some_numbers);
        echo "<br>Min Value: " . min($some_numbers);
        echo "<br>Sort: ";
        sort($some_numbers);
        print_r($some_numbers);
        echo "<br>Reverse Sort: ";
        rsort($some_numbers);
        print_r($some_numbers);
        echo "<br>Implode: " . $num_string = implode(" ", $some_numbers);
    ?>
</body>
</html>