<!DOCTYPE html>
<html>
<head>
	<title>ex17</title>
</head>
<body>
	<form method="POST">
		saisir une chaine de caractères:
		<input type="text" name="str">
		<input type="submit" value="afficher">
	</form>
<?php
if (isset($_POST['str'])) {
	$s=$_POST['str'];
	echo "le nombre de caractères de la chaine est:", strlen($s)," <br>";
	for ($i=0; $i < strlen($s); $i++) { 
			echo $s[$i], "<br>";
	}
}

?>
</body>
</html>