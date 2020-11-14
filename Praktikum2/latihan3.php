<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan PHP dasar no 3</title>
</head>
<body>
    <?php
        
        for ($n = "0";$n <="50";$n++){
            if ($n == "2"){
                echo $n;
            }
            else if ($n % 2 == "1" && $n != 1){
                echo $n;
            }
            echo "<p>";
        }

    ?>
</body>
</html>