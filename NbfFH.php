<?php
//  Nombre de femmes et d’hommes
// connexion bases de données
require_once('connexion.php');

$sql =("SELECT COUNT(*) from test WHERE gender");

$query = $db->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($result);
echo "</pre>";