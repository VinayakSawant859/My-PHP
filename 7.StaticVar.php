<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variable</title>
</head>
<body>
    <?php
    function static_var()
    {
        static $x = 1;
        $y = 1;
        $x++;
        $y++;
        echo "x=$x <br>";
        echo "y=$y <br>";
    }

    static_var();
    static_var();
    static_var();
    ?>
</body>
</html>