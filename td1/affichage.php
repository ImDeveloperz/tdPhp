<!DOCTYPE html>
<html>
<head>
	<title>affichage des étudiants</title>
</head>
<body>

	<?php
		include "connection.php";
		$sql="select * from etudiant";
		$res=$con->query($sql);
		if($res==false){
			echo "requete incorrecte";
		}
		else{

			$res->data_seek(0);//placer le pointeur en première position
			echo "<table border=1 >
			 <tr><th>CNE</th><th>Nom</th><th>PRENOM</th><th>ADRESSE</th><th>DATE DE NAISSSANCE</th><th>MOYENNE</th></tr>" ;
			while($row=$res->fetch_row()){
				echo "<tr> <td>$row[1]</td>
				<td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr> ";
						

				}
				echo "</table>";
		}

$con->close();
	?>

</body>
</html>