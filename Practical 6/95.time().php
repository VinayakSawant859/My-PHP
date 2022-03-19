<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 93: time() function</title>
</head>
<body>
    <?php
    $timestamp = time();
    echo ($timestamp);
    echo "<br>";
    echo(date("F d, Y h:i:s A", $timestamp));
    ?>
</body>
</html>