<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 81: Type Specifiers</title>
</head>
<body>
    <?php
    printf("I have %s pens and %s pencils, <br><br>", 4,18);
    $str = sprintf("After using I have %s pens and %s pencils, <br><br>", 2,9);
    echo $str, "<br>";
    $y = 2019;
    $m = 11;
    $date = 4;
    
    echo "The date is:";
    printf(" %d-%d-%d<br>",$y,$m,$date);
    ?>
</body>
</html>