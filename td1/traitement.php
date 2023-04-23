<?php
include "connection.php";


if (isset($_POST['cne']) and isset($_POST['nom']) and isset(
$_POST['prenom'])) {
	$c=$_POST['cne'];
	$n=$_POST['nom'];
	$p=$_POST['prenom'];
	$a=$_POST['adr'];
	$d=$_POST['dat'];
	$m=$_POST['myn'];
	$sql="insert into etudiant(cne, nom, prenom,adresse, date_naiss, moyenne) values('$c', '$n', '$p','$a','$d',$m)";
	$res=$con->query($sql);
	if($res==false){//test sur la validité de la requete 
		trigger_error("requete incorrecte");
		}
		else{
				echo "insertion avec succès";
		}
}


?>