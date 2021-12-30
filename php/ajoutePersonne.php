<?php

header("Location: ../index.php");

include 'connectBDD.php';

$nom =  htmlspecialchars($_POST['inputNom']);
$prenom =  htmlspecialchars($_POST['inputPrenom']);
$adresse =  htmlspecialchars($_POST['inputAdresse']);
$telephone =  htmlspecialchars($_POST['inputTelephone']);

$req = getBDD()->prepare("INSERT INTO t_personne(Nom, Prenom, Adresse, Telephone) VALUES('$nom', '$prenom', '$adresse', '$telephone')");
$req->execute();

?>