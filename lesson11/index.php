<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок одинадцатый</title>
</head>
<body>
    <?php
    echo "1:20:30 - ООП: Классы и объекты";
        require 'point.php';
        $point1 = new Point;
        $point1->x = 13;
        $point1 -> y = 2;
        echo $point1 -> x;
        echo "<br> point 2: <br> ";

        $point2 = new Point;
        $point2 -> x = 13;
        $point2 -> y = 2;
        echo $point2 -> x, "<br>";
        echo $point2 -> y;
    ?>
</body>
</html>