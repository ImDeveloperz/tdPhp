<!DOCTYPE html>
<html>
<head>
	<title>affichage</title>
</head>
<body>

	<?php
			if (isset($_POST['adr']) and isset($_POST['cache'])) {
				$v=$_POST['adr'] ;
				$w=$_POST['cache'];
	echo "ADRESSE:$v <br> Navigateur:$w ";
			}

	?>

</body>
</html>