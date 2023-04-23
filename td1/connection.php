<?php

//$con=mysqli_connect('localhost','root','', 'smi23');
$con =new mysqli('localhost', 'root', '', 'smi23');
if(mysqli_connect_errno()){//test de donnection
		echo "database connection failed";
		}
else 
	echo "connection avec succès";
///////////////////////////////////////////
//insertion des données
////////////////////////////////////////
/*$sql="insert into etudiant(cne, nom, prenom) values('test', 'test', 'test')";

$con->query($sql);//execution de la requete
if($con->query($sql)===false){//test sur la validité de la requete 
		trigger_error("requete incorrecte");
}
else{
		echo "insertion avec succès";
}*/
?>