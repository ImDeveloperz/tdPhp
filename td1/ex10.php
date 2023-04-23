<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$n=0;  
	do{
		$a=rand(0, 100);
		$b=rand(0, 100);
		$c=rand(0, 100);
		$n++;

	}while($a%2!=0 or $b%2==0 or $c%2==0 );
	echo "$a , $b,  $c <br>";
	echo "le nombre des itérations est : $n";
		

	?>

</body>
</html>