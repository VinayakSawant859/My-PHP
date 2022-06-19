<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 76: Introspection 2</title>
</head>
<body>
    <?php
    class demo
    {}
    if (class_exists('demo'))
    {
        $demo = new demo();
        echo "This is demo class";
    }
    else
    {
        echo "Class does not exist";
    }
    ?>
</body>
</html>