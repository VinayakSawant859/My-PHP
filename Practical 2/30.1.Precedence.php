<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precedence and Associativity</title>
</head>

<body>
    <?php
    $n1 = 10;
    $n2 = 5;
    $n3 = 2;
    $ans = $n1 + $n2 * $n3;
    echo "$n1+$n2*$n3=$ans<br/>";
    $ans = ($n1 + $n2) * $n3;
    echo "($n1+$n2)*$n3=$ans<br/>";
    ?>
</body>

</html>