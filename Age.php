<?php

// Afficher l'âge de chaque p0ersonne, puis la moyenne d’âge des femmes et des hommes
// connexion bases de données
require_once('connexion.php');

$sql = "SELECT first_name,birth_day FROM test WHERE birth_day;"

//On prépare la requete
$query = $db->prepare($sql);

//On execute la requête
$query->execute();

//On stocke le résultat dans un tableau associatif
$result = $query ->fetchAll(PDO::FETCH_ASSOC); //Permet de demander que je veux que dans mes resultat que les information des titre dans mes collonnes

