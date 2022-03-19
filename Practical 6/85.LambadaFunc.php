<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 67: Anonymous or Lambada Function</title>
</head>
<body>
    <?php
    $str = "hello world!";
    $lambada = create_function('$match', 'return "friend!";');
    $str = preg_replace_callback('/world/',$lambada,$str);
    echo $str;
    ?>
</body>
</html>