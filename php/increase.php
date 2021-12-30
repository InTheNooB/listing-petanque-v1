<?php

include 'connectBDD.php';

$req = getBDD()->prepare("SELECT * FROM t_compteur");
$req->execute();

$compteur = $req->fetch(PDO::FETCH_ASSOC);

$req = getBDD()->prepare('UPDATE t_compteur SET NombreActuel =  "' . ($compteur["NombreActuel"] + 1) . '" WHERE pk_compteur = 0');
$req->execute();

if ($compteur["NombreActuel"] + 1 > $compteur["NombreMax"]) {
    
$req = getBDD()->prepare('UPDATE t_compteur SET NombreMax =  "' . ($compteur["NombreActuel"] + 1) . '" WHERE pk_compteur = 0');
$req->execute();
}
