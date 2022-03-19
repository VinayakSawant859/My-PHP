<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 51: Array_combine()</title>
</head>

<body>
    <?php
    $a1 = array("PHP", "Java", "Perl");
    $a2 = array("10", "20", "30");
    $ac = array_combine($a1, $a2);
    print_r($ac);
    ?>
</body>

</html>