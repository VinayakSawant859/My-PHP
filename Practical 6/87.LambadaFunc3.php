<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 69: Lambada Function 3</title>
</head>
<body>
    <?php
    $str = "Hello World!";
    $func = function($match)
    {
        return "PHP!!!";
    };
    $str = preg_replace_callback('/World/', $func, $str);
    echo $str;
    ?>
</body>
</html>