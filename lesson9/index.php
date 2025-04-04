<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок девятый</title>
</head>

<body>
    <?php
    echo "1:03:06 - Явное и неявное приведение типов";
                                        //!!!!Можно писать echo через запятые, тогда не придётся тегать миллион раз!!!!
        $var = 0;
        if($var) {
            echo 'Переменная $var рассматривается как true', "<br>";
        } else {
            echo 'Переменная $var рассматривается как false', "<br>";
        }
//для вывода 1
        echo true,"<br>";
//Для вывода ничего
        echo false, "=>'значит у нас тут ничего нету'","<br>";
    ?>
    <?php
        //Перевел вещественное число в int
        $float = 4.3;
        echo "<br>float= ",$float;
        $number = (int)$float;
        echo "<br>number(integer(4.3))=",$number;
    ?>
    
    <?php
        echo "<br>->Тут<-<br>";
        $num=21;
        $f=(float)($num/2)-(int)($num/2);
        if($f){
            echo 'Число нечетное <br>';
        } else {
            echo 'Число четное <br>';
        }
    ?>
</body>

</html>