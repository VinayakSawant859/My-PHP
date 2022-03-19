<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 64: Variable Function</title>
</head>
<body>
    <?php
    $function = function(){
        echo 'Information Technology';
    };

    if(is_callable($function))
    {
      echo "It is Function";
    }
    else
    {
        echo "It is not Function";
    }

    $var = "IF";
    echo "<br>";

    if(is_callable($var))
    {
        echo "It is function";
    }
    else
    {
        echo "It is not function";
    }
    ?>
</body>
</html>