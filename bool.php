<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $result1 = true;
        $result2 = false;
        echo is_bool($result2);
        $var1 = null;
        $var3 = "";
        echo is_null($var1);
    ?>
    Type Juggling:
    <?php
        $count = "2 cats";
        echo "Type: " . gettype($count);
        $count_+= 3;
        echo "Type: " . gettype($count) . "<br>";
        echo "Type Casting";
        settype($count, "integer");
        echo "Type: " . gettype($count) . "<br>";
    ?>
</body>
</html>