<?php

// Test de l'inclusion de bdd.php avec le bon chemin
// Depuis C:\MAMP\htdocs\TP Réseau\controller, le fichier bdd.php est dans C:\MAMP\htdocs\TP Réseau\bdd\bdd.php
if (file_exists("../bdd/bdd.php")) {
    include("../bdd/bdd.php");
} elseif (file_exists(__DIR__ . "/../bdd/bdd.php")) {
    include(__DIR__ . "/../bdd/bdd.php");
} else {
    
    // Essayer différents chemins possibles basés sur votre structure
    $possible_paths = [
        "../bdd.php",           // Si bdd.php était à la racine
        "../../bdd.php",        // Si on remonte de 2 niveaux
        "../bdd/bdd.php",       // Le bon chemin selon votre structure
        __DIR__ . "/../bdd/bdd.php"
    ];
    
    foreach ($possible_paths as $path) {
        if (file_exists($path)) {
            include($path);
            break;
        }
    }
}

// Vérifier la connexion à la base de données
if (isset($bdd)) {
} else {
    echo "Connexion BDD ÉCHOUE<br>";
}

try {
    $req = $bdd->prepare("SELECT commentaires.id, commentaires.nom, commentaires.commentaire, commentaires.signature, commentaires.note, commentaires.date_creation FROM commentaires ORDER by date_creation DESC;");
    
    $req->execute();
    $articles = $req->fetchAll(PDO::FETCH_ASSOC);

    
} catch (PDOException $exception) {
    echo "Erreur SQL : " . $exception->getMessage() . "<br>";
    $articles = [];
}
?>