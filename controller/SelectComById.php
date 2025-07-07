<?php
include("../bdd.php");

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); // Sécurisation de l'ID
    
    try {
        $req = $bdd->prepare("SELECT id, nom, commentaire, signature, note, date_creation FROM commentaires WHERE id = ?");
        $req->execute([$id]);
        $commentaire = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
        $commentaire = null;
    }
} else {
    $commentaire = null;
}
?>