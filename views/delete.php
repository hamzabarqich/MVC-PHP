<?php
$title = "Supprimer stagiaire";

ob_start();
?>

<p>Voulez vous vraiment supprimer le stagiaire ?</p>
    <a class="btn btn-danger" href="destroy.php?id=<?= $stagiaire->id ?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php?action=list">Annuler la suppression</a>
<?php
$content = ob_get_clean();

include_once 'views/layout.php';