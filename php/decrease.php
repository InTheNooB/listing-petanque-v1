<?php

include 'connectBDD.php';

$req = getBDD()->prepare("SELECT * FROM t_compteur");
$req->execute();

$compteur = $req->fetch(PDO::FETCH_ASSOC);

if ($compteur["NombreActuel"] > 0) {

    $req = getBDD()->prepare('UPDATE t_compteur SET NombreActuel =  "' . ($compteur["NombreActuel"] - 1) . '" WHERE pk_compteur = 0');
    $req->execute();
}
