<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		
sasir une chaine de caratères
<input type="text" name="str">
<input type="submit" value="afficher">
	</form>

</body>
</html>
<?php
if (isset($_POST['str'])) {
	$s=$_POST['str'];
	echo str_replace("zut", "***", $s);
}


?>