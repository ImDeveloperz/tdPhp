<?php
$adresse=array("jumia@gmail.com","avito@yahoo.fr", "wikipedia@gmail.com", "hespress@gmail.com" );

for ($i=0; $i <count($adresse) ; $i++) { 
	$tab= explode("@", $adresse[$i]);
    echo $tab[1], "<br>" ;
    $tab2[$i]=$tab[1];
}
$tab3=array_count_values($tab2);
$som=0;
foreach ($tab3 as  $value) {
	$som+=$value;
}
foreach ($tab3 as $fournisseur => $nombre) {

	echo "<br>Fournisseur:", $fournisseur, "  le % est :", $nombre/$som;
}



?>