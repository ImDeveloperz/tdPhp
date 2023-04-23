<?php
for ($i=11; $i <37 ; $i++) { 
	$tab[$i]=chr($i+54);
}

//print_r($tab);
foreach ($tab as $key => $value) {
	echo "indice est: $key et la valeur est:$value", " <br>";
}
?>