<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan PHP dasar no 2</title>
</head>
<body>
    <?php
    $name=array("lanirne","aduh","qifuat","toda", "anevi","samid","kifuat");
    sort ($name);

    for ($n= "0";$n<= "6";$n++){
        echo"<h1>";
        echo$name[$n];
        echo "</h1>";

    }
    ?>
</body>
</html>