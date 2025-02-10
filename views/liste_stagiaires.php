<?php
$title = "Liste des stagiaires";

ob_start(); // from here we want to start recovering html below to $content variable
?>
<hr>
<div id="ajouter"><a href="create.php" class="btn btn-primary">Ajouter</a></div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Login</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($stagiaires as $stagiaire): ?>
            <tr>
                <td><?= $stagiaire->id ?></td>
                <td><?= $stagiaire->nom ?></td>
                <td><?= $stagiaire->prenom ?></td>
                <td><?= $stagiaire->age ?></td>
                <td><?= $stagiaire->login ?></td>
                <td>
                <!-- Your Delete Button that triggers the modal -->
                    <a href="#" id="myBtn" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $stagiaire->id ?>" data-id="<?= $stagiaire->id ?>">Supprimer</a>

                <!-- Modal for Confirmation with a unique ID for each stagiaire -->
                <div class="modal fade" id="deleteModal<?= $stagiaire->id ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $stagiaire->id ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel<?= $stagiaire->id ?>">Confirmer la suppression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr de vouloir supprimer cet élément ?
                    </div>
                    <div class="modal-footer">
                        <a href="index.php"  class="btn btn-secondary">Annuler</a>
                        <a href="destroy.php?id=<?= $stagiaire->id ?>" id="confirmDelete<?= $stagiaire->id ?>" class="btn btn-danger">Supprimer</a>
                    </div>
                    </div>
                </div>
                </div>
                </td>
            </tr>

    
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean();  // here we stop and recovered all html above to $content variable   ?>  
<?php include_once 'views/layout.php'; ?>