<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $first = "The quick brown fox";
        $second = " jumped over the lazy dog";

        $third = $first;
        $third .= $second;
        echo $third;
    ?>
    <br>
    Lowercase: <?php echo strtolower($third) ?><br>
    Uppercase: <?php echo strtoupper($third) ?><br>
    Uppercase First: <?php echo ucfirst($third) ?><br>
    Uppercase Words: <?php echo ucwords($third) ?><br>
    Length: <?php echo strlen($third); ?><br>
    Trim: <?php echo "A" . trim("B C D") . "E" ?><br>
    Find: <?php echo strstr($third, "brown") ?><br>
    Replace by String: <?php echo str_replace("quick", "super-fast", $third) ?><br>
    Repeat: <?php echo str_repeat($third, 2) ?><br>
    Substring: <?php echo substr($third, 5, 10) ?><br>
    Find Character: <?php echo strchr($third, "z") ?><br>


</body>
</html>