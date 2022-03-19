<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 51: Array_chunk()</title>
</head>

<body>
    <?php
    $a1 = array('PHP', 'C', 'Java', 'Perl');
    $ac = array_chunk($a1, 2, true);
    print_r($ac);
    ?>
</body>

</html>