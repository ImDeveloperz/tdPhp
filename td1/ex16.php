<!DOCTYPE html>
<html>
<head>
	<title>chaine de caractères</title>
</head>
<body>
	<form method="post">
		saisir une phrase:
		<input type="text" name="str"  value="<?php echo $_POST['str'];  ?>">
		<input type="submit" name="btn"  value="ucwords">
         <input type="submit" name="btn" value="strtoupper">
    <input type="submit" name="btn" value="strtolower">
	</form>


	<?php
	if (isset($_POST['str']) and isset($_POST['btn'])) {

	switch ($_POST['btn']) {
		case 'ucwords':
			
		$str=$_POST['str'];
		$str1=ucwords($str);
		echo $str1;
			break;
		case 'strtolower':
			
		$str=$_POST['str'];
		$str1=strtolower($str);
		echo $str1;
			break;
		case 'strtoupper':
		
		$str=$_POST['str'];
		$str1=strtoupper($str);
		echo $str1;
			break;
		
	}
		
	}
		
	?>

</body>
</html>