<!DOCTYPE html>
<html>
<head>
	<title>ex15</title>
</head>
<body>

	<form method="post">
		<input type="submit" name="bt" value="vendre">
		<input type="submit" name="bt" value="acheter">
		<input type="submit" name="bt" value="louer">
	</form>
	<?php
	if (isset($_POST['bt'])) {
		echo "string";
			if ($_POST['bt']=='vendre') {
				header("Location:vendre.php");
			}
			if ($_POST['bt']=='acheter') {
				header("Location:acheter.php");
			}
			if ($_POST['bt']=='louer') {
				header("Location:louer.php");
			}
	}
	?>

</body>
</html>