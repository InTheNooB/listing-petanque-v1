<?php

include 'connectBDD.php';

$req = getBDD()->prepare("SELECT * FROM t_personne");
$req->execute();

$personne = $req->fetchAll();

$filteredData = "";

foreach($personne as $p) {
    $filteredData = $filteredData . $p['Nom'] . ",";
    $filteredData = $filteredData . $p['Prenom'] . ",";
    $filteredData = $filteredData . $p['Adresse'] . ",";
    $filteredData = $filteredData . $p['Telephone'] . ";";
}


echo substr($filteredData, 0, -1);

?>