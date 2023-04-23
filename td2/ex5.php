<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
   /*  $adr="www.rt.th.com";
     $model="#^(www)\.[a-zA-Z]+(.|-)?[a-zA-Z]+\.[a-z]{2,4}#";
     if(preg_match($model, $adr)){
     	echo "adresse valide";
     }
     else{
     	echo "adresse non valide";
     }

*/


$model="#^212(6|7)?[0-9]{8}$#";

$age=21265678965;
if (preg_match($model, $age)) {
	# code...
	echo "num valide";
}
else{
	echo "num non valide";
}


	?>



</body>
</html>