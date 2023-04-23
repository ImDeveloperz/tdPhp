<!DOCTYPE html>
<html>
<head>
	<title>ex12</title>
</head>
<body>
	<form method="post">
		saisir le premier nombre:<input type="number" name="n1"><br>
saisir le deuxième nombre:<input type="number" name="n2"><br>
<input type="submit" value="calculer le pgcd">
	</form>

</body>
</html>
<?php
if (isset($_POST['n1']) and isset($_POST['n2'])) {
	$a=$_POST['n1'];
    $b=$_POST['n2'];
    try{
    	if($a<=0 or $b<=0){
    		throw new Exception("un des deux nombre est négatif");
    		
    	}
    do{
        $r=$a%$b;
        $a=$b;
        $b=$r;
    }while($r!=0);
echo "le pgcd de", $_POST['n1'], " et ", $_POST['n2'] , "est: $a";
}catch(Exception $e){
	echo "erreur", $e->getMessage();

}
}


?>