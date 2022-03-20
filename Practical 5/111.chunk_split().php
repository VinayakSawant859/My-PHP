<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 86: chunk_split()</title>
</head>

<body>
    <?php
    $str = "Hello PHP";
    print_r(chunk_split($str, 6, "..."));
    ?>
</body>

</html>