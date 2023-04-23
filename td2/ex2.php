<!DOCTYPE html>
<html>
<head>
	<title>ex2</title>
</head>
<body>

	<?php
	/*
	$tab = array('alaoui' =>'mohamed' , "tijani"=>"khalid", "trik"=>"said");
	//print_r($tab);
foreach ($tab as $nom => $prenom) {
	# code...
	printf("%'*-20s%'.-20s<br>", $nom, $prenom);
}*/

$str1="Bonjour";
$str2="Bonsoir";
//echo strcmp($str1, $str2);
if(strcmp($str1, $str2)<0){
	echo "$str1 est avant $str2 en ordre alphabétique" ;

}
else {
	echo "$str2 est avant $str1 en ordre alphabétique" ;
}
	
	?>

</body>
</html>