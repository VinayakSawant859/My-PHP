<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 13: Accesing Properties</title>
</head>
<body>
    <?php
    class Student
    {
        //Properties
        public $name;
        public $city;
        //Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }
    }
    $stu1 = new Student();
    $stu2 = new Student();
    $stu1->set_name('Vijay');
    $stu2->set_name('Yogita');
    echo $stu1->get_name(); echo "<br>";
    echo $stu2->get_name(); echo "<br>";
    ?>
</body>
</html>