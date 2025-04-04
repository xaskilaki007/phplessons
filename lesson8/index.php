<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок восьмой</title>
</head>

<body>
    <?php
    echo "54:38 - Базовые функции языка";
    $user = "Ioan";
    if (isset($user))
        echo "Переменна существует";
    else
        echo "Переменная не существует";

    $user1 = "Ioan";
    echo "<br>";
    if (true)
        echo "Переменная существует";
    else
        echo "Переменная не существует";
    echo "<br>";

    $usor;
    if (isset($user))
        echo "Переменная существует";
    else
        echo "Переменная не существует";

    $usor = "";
    echo "<br>";
    if (empty($usor))
        echo "Переменная не существует";
    else
        echo "Переменная существует";

    echo "<br><br><br><br>";
    echo gettype(123)

    ?>
    <?php
    echo "<br><br><br><br> это ";
    if (is_int(1.25))
        echo "число";
    else
        echo "не число";
    ?>
    <!-- Попробовал сделать css внутри php -->
            <!-- <?php
            echo "<br><br><br><br> это ";
            $name = "Алексей";
            $color = "blue";
            ?>
            <p class="user-name">Привет, <?php echo $name; ?>!</p>
            <style>
                .user-name {
                    color: <?php echo $color; ?>;
                    /* PHP может задавать CSS-значения */
                    font-size: 20px;
                }
            </style> -->
    <?php
    echo "<br><br><br><br> делаем математику в php <br> ";
        $str='45.2';
        $number;
        echo "Чисто str="; echo $str;
        echo "<br>"; echo "Чисто str-12="; echo $number=$str-12;
        echo "<br> Повтороное number ="; echo $number;
    ?>    
</body>

</html>