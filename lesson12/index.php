<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок двенадцатый</title>
</head>
<body>
    <?php
    echo "1:30:40 - Области видимости переменных класса";
    echo "<link rel='stylesheet' href='style.css'>";
        require 'point.php';
        $point1 = new Point;
        $point1 ->x  = 13;
        $point1 -> y = 2;
        $point1 -> z = 1;
        echo "<div>point1: x,y,z </div><br>",$point1 -> x,"<br>",$point1 -> y,"<br>",$point1 -> z;
        echo "<br>__________________<br>";

        $point2 = new Point;
        $point2 -> x = 13;
        $point2 -> y = 2;
        $point2 -> z = mt_rand(1,20);
        echo "<div>point2: x,y,z: <br></div>",$point2 -> x, "<br>",$point2 -> y, "<br>", $point2 -> z, "<br> Point переменная:", Point:: $num;
        echo "<br><div>Переопределение переменной через обычный синтаксис</div><br>";
        $first = $second = 2;
        $first = 3;
        echo "<br><div> Определенная без объектов:</div> --------(", $first . ") Переопределенная без объектов: ------- (" . $second . ")";

        echo "<br><div>Переопределение переменной через объекты</div> ";
        $first = 5;
        $second = &$first;
        $second = 3;
        echo "<div class=opred> first переменная переопределенаня & $ first;через</div>",$first;

        $first = new Point;
        $first->x=3;
        $first->y=3;
        echo " <div> Проверка first до переопределения: </div>","x: {$first->x}, y: {$first->y}";
        $second = $first;
        echo "  <div>Проверка first после переопределения: </div>","x: {$first->x}, y: {$first->y}";
        $second->x=5;
        $second->y=5;

        echo "x: {$first->x}, y: {$first->y}";
    ?>
</body>
</html>