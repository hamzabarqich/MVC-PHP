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
                    <!-- <a href="delete.php?id=<?= $stagiaire->id ?>"  class="btn btn-danger btn-sm">Supprimer</a> -->


                <!-- Your Delete Button -->
                    <a href="#" id="myBtn" class="btn btn-danger btn-sm" data-id="<?= $stagiaire->id ?>" data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer</a>

                <!-- Modal for Confirmation -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirmer la suppression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr de vouloir supprimer cet élément ?
                    </div>
                    <div class="modal-footer">
                        <a href="index.php"  class="btn btn-secondary">Annuler</a>
                        <a href="destroy.php" id="confirmDelete" class="btn btn-danger">Supprimer</a>
                    </div>
                    </div>
                </div>
                </div>

                <!-- Link to external JS file -->
                <script src="/views/scripts.js"></script>

                </td>
            </tr>

    
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean();  // here we stop and recovered all html above to $content variable   ?>  
<?php include_once 'views/layout.php'; ?>