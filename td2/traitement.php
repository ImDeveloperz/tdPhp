<?php
if (!empty($_POST['nm']) and !empty($_POST['pr']) and !empty($_POST['ad']) and !empty($_POST['vl']) and !empty($_POST['cd'])) {
	echo "<table border=1>";
	$nm=$_POST['nm'];
	$pr=$_POST['pr'];
	$ad=$_POST['ad'];
	$vl=$_POST['vl'];
	$cd=$_POST['cd'];
	echo "<tr><th>NOM</th><th>PRENOM</th><th>ADRESSE</th><th>VILLE</th><th>CODE POSTAL</th></tr>";
	echo "<tr><td>$nm</td><td>$pr</td><td>$ad</td><td>$vl</td><td>$cd</td></tr>";
	echo "</table>";
}
else{
	 echo "<script type='text/javascript'>alert('erreur: champ manquant')</script>";
}

?>
