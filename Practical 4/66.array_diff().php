<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 50: Array_diff()</title>
</head>

<body>
    <?php
    $a1 = array('PHP', 'C', 'Java', 'Perl');
    $a2 = array('PHP', 'ASP', 'Java', 'Python');
    $a = array_diff($a1, $a2);
    print_r($a);
    ?>
</body>

</html>