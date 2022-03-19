<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 63: Variable Function</title>
</head>
<body>
    <?php
    function simple(){
        echo "In simple()<br />\n";
    }
    function data($arg = " ")
    {
        echo "In data(); argument was '$arg'.<br>\n";
    }
    $func = 'simple';
    $func();
    $func = 'data';
    $func('test');
    ?>
</body>
</html>