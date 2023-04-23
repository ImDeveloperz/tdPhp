<!DOCTYPE html>
<html>
<head>
	<title>ex 13</title>
</head>
<body>
<form method="post">
	saisir un nombre de 3 chifre:<input type="number" name="n">
<input type="submit" value="chercher">
</form>
</body>
</html>

<?php
if(isset($_POST['n'])){
$a=$_POST['n'];
//$n=0;
$b=rand(100,999);
for ($i=0; $a!=$b ; $i++) { 
	$b=rand(100,999);
}
/*
while($a!=$b){
		$b=rand(100,999);
		$n++;

}*/
echo "le nombe d'itération pour obtenir aléatoirement le nombre $a est:$i";
}

?>