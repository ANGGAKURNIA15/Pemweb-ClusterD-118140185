<!DOCTYPE html>
<html>
<head>
	<title>Faktorial</title>
</head>
<body>

	<form action="" method="get">
		
		<label for="input">Masukan bilangan: </label>
		<input type="number" id="input" name="bilangan">
		<br>
		<button type="submit" name="submit">Input</button>

	</form>
	<br>

</body>
</html>

<?php 

	function faktorial($n){

		$fa=1;
		echo "$n! = ";

		for ($i=$n;$i>0;$i--){

			if ($i==1) {
				echo "$i";
			}

			else {
				echo "$i * ";
			}
			
			$fa=$fa*$i;

		}

		echo " = $fa";
	}

	if (isset($_GET["submit"])) {
		faktorial($_GET["bilangan"]);
	}

 ?>
