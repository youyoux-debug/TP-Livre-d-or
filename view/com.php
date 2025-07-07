<?php 
// Test d'inclusion avec le bon chemin
if (file_exists('../controller/SelectCom.php')) {
    include('../controller/SelectCom.php');
} elseif (file_exists('controller/SelectCom.php')) {
    include('controller/SelectCom.php');
} else {
    // Le fichier accueil.php est dans /view/, donc on remonte d'un niveau
    if (file_exists(__DIR__ . '/../controller/SelectCom.php')) {
        include(__DIR__ . '/../controller/SelectCom.php');
    }
}

if (file_exists('../controller/AjoutCom.php')) {
    include('../controller/AjoutCom.php');
} elseif (file_exists('controller/AjoutCom.php')) {
    include('controller/AjoutCom.php');
} else {
    if (file_exists(__DIR__ . '/../controller/AjoutCom.php')) {
        include(__DIR__ . '/../controller/AjoutCom.php');
    }
}


?>

<h1>Livre d'or</h1>

<h2>Laisser un commentaire</h2>
<form method="POST" action="">
    <label>Nom : <input type="text" name="nom" required></label><br><br>
    <label>Commentaire :<br><textarea name="commentaire" rows="4" cols="40" required></textarea></label><br><br>
    <label>Signature (optionnelle) :<br><textarea name="signature" rows="2" cols="40" placeholder="Ex: Cordialement, Jean"></textarea></label><br><br>
    <label>Note :
        <select name="note" required>
            <option value="">--</option>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?> étoile<?= $i > 1 ? 's' : '' ?></option>
            <?php endfor; ?>
        </select>
    </label><br><br>
    <button type="submit">Envoyer</button>
</form>