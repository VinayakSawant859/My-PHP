<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Statements</title>
</head>

<body>
    <?php
    $i = 1;
    do {
        echo "$i<br/>";
        $i += 2;
    } while ($i < 10);
    ?>
</body>

</html>