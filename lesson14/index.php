<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок четырнадцатый</title>
</head>

<body>
    <?php
    // Константы всегда в верхнем регистре, 
    // констенты нельзя создавать повторно.
    
    echo "1:47:59 - Константы<br><br><br>";

    if (define('NUMBER', 1)) {
        echo 'Константа NUMBER успешна создана и имеет значение 1';
    }
    echo "<br>";
    if (defined('NUMBER')) {
        echo 'Константа уже создана';
    }


    ?>
</body>

</html>