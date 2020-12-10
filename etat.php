<?php

// Répartition par Etat et le nombre d’enregistrement par état (croissant)
// connexion bases de données
require_once('connexion.php');

$sql = "SELECT state_code, country_code FROM test WHERE state_code GROUP BY state_code ORDER BY state_code ASC"; //On demande de selectionner toute la table

//On prépare la requete
$query = $db->prepare($sql);

//On execute la requête
$query->execute();

//On stocke le résultat dans un tableau associatif
$result = $query ->fetchAll(PDO::FETCH_ASSOC); //Permet de demander que je veux que dans mes resultat que les information des titre dans mes collonnes

echo "<pre>";
print_r($result);
echo "</pre>";