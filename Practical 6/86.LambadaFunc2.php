<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 68: Lambada Function 2</title>
</head>
<body>
    <?php
    $greet = function($name)
    {
        print("Hello \r\n". $name);
    };
    $greet('World');
    echo "<br>";
    $greet('PHP');
    ?>
</body>
</html>