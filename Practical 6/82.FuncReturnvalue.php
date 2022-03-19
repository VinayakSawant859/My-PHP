<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 60: Functions Return Value </title>
</head>
<body>
    <?php
    function add($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }
    $return_value = add(50,20);
    echo "Returned value from the function: $return_value";
    ?>
</body>
</html>