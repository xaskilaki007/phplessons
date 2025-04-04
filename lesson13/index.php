<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок тренадцатый</title>
</head>
<body>
    <?php
    echo "<div>1:41:45 - Расстояние между двумя точками</div>";
    require "point.php";
    // РЕшение мат задачи:
    $p1 = new Point;
    $p1 ->x=10;
    $p1 ->y=34;

    $p2 = new Point;
    $p2 ->x=3;
    $p2 ->y=10;

    $distance = sqrt((pow(($p2->x-$p1->x),2)+pow(($p2->y-$p1->y),2)));
    
    echo $distance;
    //Изучение функций
    // $second = clone $first;
    // $second ->x=3;
    // $second ->y=3;
    
    // echo "<div>x:{$first->x},y:{$first->y}</div>";
    // echo "<br>";
    // echo "<div>x: {$second -> x}, y: {$second ->y}</div>";
    
    // echo "pow(2,8)= ",pow(2,8);
    // echo "<br>sqrt16=",sqrt(16);
    
    
    ?>
</body>
</html>