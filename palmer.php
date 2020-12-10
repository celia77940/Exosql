<?php
//  Afficher tous les gens dont le nom est Palmer
// connexion bases de données
require_once('connexion.php');

$sql = "SELECT first_name,last_name FROM test WHERE last_name ='Palmer'"; 

//On prépare la requete
$query = $db->prepare($sql);

//On execute la requête
$query->execute();

//On stocke le résultat dans un tableau associatif
$result = $query ->fetchAll(PDO::FETCH_ASSOC); //Permet de demander que je veux que dans mes resultat que les information des titre dans mes collonnes

var_dump($result);
