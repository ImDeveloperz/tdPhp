<!DOCTYPE html>
<html>
<head>
	<title>ex14</title>
</head>
<body>
	<form method="post">
		PHT: <input type="number" name="pht" 
		 value="<?php echo $_POST['pht']?>"><br>
		%TVA: <input type="number" name="ptva"
    value="<?php echo $_POST['ptva']?>"
		><br>
		<input type="submit" value="clculer">
	</form>

<?php
if (!empty($_POST['pht']) and !empty($_POST['ptva'])) {
	$pttc=$_POST['pht']*(1+ $_POST['ptva']);
	$tva=$_POST['pht']*$_POST['ptva'];
	echo "PRIX TTC: <input type='text' value= $pttc  >";
	echo "TVA: <input type='text' value= $tva  >";
}


?>
</body>
</html>