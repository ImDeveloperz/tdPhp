<!DOCTYPE html>
<html>
<head>
	<title>ex1</title>
</head>
<body>
<form method="get" >
	saisir age: 
	<input type="number" name="age">
	<input type="radio" name="genre" value="M" checked="checked"> Homme
	<input type="radio" name="genre" value="F"> Femme
	<input type="submit" value="ok">

</form>


<?php
if(isset($_GET['age']) and isset($_GET['genre'])){
$a=$_GET['age'];
$g=$_GET['genre'];

if($g=="F" and $a>21 and $a<40 ){
 echo "Bonjour Madame .....";
}
else{
	echo "....";
}
}
?>
</body>
</html>