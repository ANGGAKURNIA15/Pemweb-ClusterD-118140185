<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hasil</title>
</head>
<body>
    <h2> Berikut merupakan hasil dari setiap operasi </h2>
    <br>
    <?php    
    $bilangan1 = $_GET ['bilangan1'];
    $bilangan2 = $_GET ['bilangan2'];
    $penjumlahan = $bilangan1 + $bilangan2;
    $pengurangan = $bilangan1 - $bilangan2;
    $perkalian = $bilangan1 * $bilangan2;
    $pembagian = $bilangan1 / $bilangan2;

    echo "PENJUMLAHAN","<br>","Operator : "," + ","<br>","Hasil :",$penjumlahan;
    echo "<br>";
    echo "PENGURANGAN","<br>","Operator : "," - ","<br>","Hasil :",$pengurangan;
    echo "<br>";
    echo "PERKALIAN","<br>","Operator : "," * ","<br>","Hasil :",$perkalian;
    echo "<br>";
    echo "PEMBAGIAN","<br>","Operator : "," / ","<br>","Hasil :",$pembagian;
    echo "<br>";
    ?>
</body>
</html>