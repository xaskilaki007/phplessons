<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Урок второй</title>
</head>
<body>
    <?php
    echo "09:52 - Конец строки";
        echo "Текущая дата и время";
        echo date(DATE_RSS)
    ?>
    <?php
    echo 9
    +
    3
    -
    4;
    echo "Text";
    ?>
    <br>

    <?php
    if(mt_rand(0,1)){
        ?>
        <div style="color: blue"> Синий текст</div>
        <?php
    } else {
        ?>
        <div style="color: red"> Красный текст </div>
        <?php
    }
    ?>
</body>
</html>