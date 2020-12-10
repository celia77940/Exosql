<?php
// Connexion à une base de données
try{
    $db = new PDO('mysql:host=127.0.0.1;dbname=exo sql', 'root','');
    $db->exec('SET NAMES "UTF8"');
}catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage(); 
    die(); 
}

