<?php

// Test de l'inclusion de bdd.php avec le bon chemin
// Depuis C:\MAMP\htdocs\TP Réseau\controller, le fichier bdd.php est dans C:\MAMP\htdocs\TP Réseau\bdd\bdd.php
if (file_exists("../bdd/bdd.php")) {
    include("../bdd/bdd.php");
} elseif (file_exists(__DIR__ . "/../bdd/bdd.php")) {
    include(__DIR__ . "/../bdd/bdd.php");
} else {
    
    // Tester d'autres chemins possibles
    $possible_paths = [
        "../bdd.php",
        "../../bdd.php", 
        "../bdd/bdd.php"
    ];
    
    foreach ($possible_paths as $path) {
        if (file_exists($path)) {
            include($path);
            break;
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = htmlspecialchars($_POST["nom"]);
    $commentaire = htmlspecialchars($_POST["commentaire"]);
    $signature = isset($_POST["signature"]) ? htmlspecialchars($_POST["signature"]) : null;
    $note = intval($_POST["note"]);
    

    if ($nom && $commentaire && $note >= 1 && $note <= 5) {
        try {
            $stmt = $bdd->prepare("INSERT INTO commentaires (nom, commentaire, signature, note) VALUES (?, ?, ?, ?)");
            $result = $stmt->execute([$nom, $commentaire, $signature, $note]);
            
            if ($result) {
                echo "<p style='color: green;'>Commentaire ajouté avec succès !</p>";
            } else {
                echo "<p style='color: red;'>Échec de l'insertion</p>";
            }
            
        } catch (PDOException $e) {
            echo "<p style='color: red;'>Erreur SQL : " . $e->getMessage() . "</p>";
        }
    } else {
        echo "<p style='color: red;'>Veuillez remplir tous les champs correctement.</p>";
        echo "Validation : nom=" . ($nom ? 'OK' : 'KO') . ", commentaire=" . ($commentaire ? 'OK' : 'KO') . ", note=" . ($note >= 1 && $note <= 5 ? 'OK' : 'KO') . "<br>";
    }
}
?>