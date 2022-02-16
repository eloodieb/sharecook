<?php

// Connexion à la BDD
function dbConnect()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=sharecook;charset=utf8', 'root');
        return $db;
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
