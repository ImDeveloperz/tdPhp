<!DOCTYPE html>
<html>
<head>
	<title>ex13</title>
</head>
<body>
	<?php 
		$cl=$_SERVER['HTTP_USER_AGENT'];
		
	?>
	<form method="post" >
		saisir adresse:<input type="text" name="adr">
		<input type="hidden" name="cache" 
		value="<?php echo $cl; ?>">
		<input type="submit" value="ok">

	</form>
<?php
			if (isset($_POST['adr']) and isset($_POST['cache'])) {
				$v=$_POST['adr'] ;
				$w=$_POST['cache'];
	echo "ADRESSE:$v <br> Navigateur:$w ";
			}

	?>
</body>
</html>