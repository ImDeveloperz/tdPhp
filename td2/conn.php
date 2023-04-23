<?php
/* Vous devriez toujours activer le rapport d'erreur pour mysqli avant une tentative de connexion */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli('localhost', 'root', '', 'smi23');
/* Définir le jeu de caractère désiré après avoir établie une connexion */
$mysqli->set_charset('utf8mb4');
printf("Success... %s\n", $mysqli->host_info);

?>