<!DOCTYPE html>
<html>
<head>
	<title>ex11</title>
</head>
<body>

<form method="post">
	saisir un nombre:<input type="number" name="val">
	<input type="submit" value="ok" >


</form>
</body>
</html>
<?php
if (isset($_POST['val'])) {
	$x=$_POST['val'];
	$y=rand(1,100);
	$n=0;
	/*while ($y%$x!=0) {
		$y=rand(1,100);
		$n++;
	}*/
	do{
		$y=rand(1,100);
         $n++;

	}while($y%$x!=0);
	echo "le nombe d'itération est $n";

}


?>