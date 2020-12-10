<?php
// Insérer un utilisateur, lui mettre à jour son adresse mail, puis supprimer l’utilisateur
// connexion bases de données
require_once('connexion.php');

$sql =("INSERT INTO test ( `first_name`, `last_name`, `email`, `gender`, `ip_address`, `birth_date`, `avatar_url`, `state_code`, `country_code`) VALUES ( 'Celia', 'Rameau', 'celiarameau@live.fr', 'Female', '188.589.25.98', '20/04/1999', 'https://blalbla.fr/', '77', 'FR')");

//On prépare la requete
$query = $db->prepare($sql);

//On execute la requête
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";

// Modif EMAIL

$sql =("UPDATE test SET email='celiarameau@live.fr' WHERE id=1002");

$query = $db->prepare($sql);

$query->execute();

$result1 = $query->fetchAll(PDO::FETCH_ASSOC);



// SUP users

$sql =("DELETE FROM `test` WHERE id=1001");

$query = $base->prepare($sql);

$query->execute();

$result2 = $query->fetchAll(PDO::FETCH_ASSOC);
