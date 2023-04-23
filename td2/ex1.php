<!DOCTYPE html>
<html>
<head>
	<title>exercice 1</title>
</head>
<body>
	<form  method="post">
		saisir une chaine <input type="text" name="str"><input type="submit" value="afficher">

	</form>

</body>
</html>
<?php
if (isset($_POST['str'])) {
	# code...
	echo strtolower($_POST['str']);
}

?>