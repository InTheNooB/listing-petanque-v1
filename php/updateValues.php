
<?php

include 'connectBDD.php';


$req = getBDD()->prepare("SELECT * FROM t_compteur");
$req->execute();

$compteur = $req->fetch(PDO::FETCH_ASSOC);

$req = getBDD()->prepare("SELECT * FROM t_personne");
$req->execute();

$personne = $req->fetchAll();

$personne = count($personne);

$filteredData = $compteur['NombreActuel'] . "," . $compteur['NombreMax'] . "," . $personne;

echo $filteredData;

?>