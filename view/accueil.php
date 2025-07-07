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

<h2>Commentaires</h2>
<?php if (isset($articles) && !empty($articles)): ?>
    <p>Nombre de commentaires : <?= count($articles) ?></p>
    <?php foreach ($articles as $com): ?>
        <div style="border:1px solid #ccc; margin:10px 0; padding:10px;">
            <strong><?= htmlspecialchars($com['nom']) ?></strong> - <em><?= $com['date_creation'] ?></em><br>
            <span class="etoiles"><?= str_repeat("★", $com['note']) . str_repeat("☆", 5 - $com['note']) ?></span><br>
            <p><?= nl2br(htmlspecialchars($com['commentaire'])) ?></p>
            <?php if (!empty($com['signature'])): ?>
                <div style="margin-top: 10px; padding-top: 5px; border-top: 1px dotted #ccc; font-style: italic; text-align: right;">
                    <?= nl2br(htmlspecialchars($com['signature'])) ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun commentaire pour le moment.</p>
    <?php if (!isset($articles)): ?>
        <p style="color: red;">Variable \$articles non définie</p>
    <?php endif; ?>
<?php endif; ?>