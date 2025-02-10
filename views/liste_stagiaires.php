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
                <!-- Your Delete and Modify Button that triggers the modal -->
                    <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modifyModal<?= $stagiaire->id ?>">Modifier</a>
                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $stagiaire->id ?>">Supprimer</a>

                <!-- Modal for Modify with a unique ID for each stagiaire -->
                <div class="modal fade" id="modifyModal<?= $stagiaire->id ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modification stagiaires</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                    <form action="update.php" method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" id="id"  value="<?= $stagiaire->id ?>">
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="Saisir votre nom" value="<?= $stagiaire->nom ?>">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Saisir votre prénom" value="<?= $stagiaire->prenom ?>">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" name="age" id="age" placeholder="Saisir votre age" min="0" max="98" required value="<?= $stagiaire->age ?>">
                        </div>
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" name="login" id="login" placeholder="Saisir votre login" value="<?= $stagiaire->login ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Saisir votre mot de passe" minlength="8" maxlength="20" required value="<?= $stagiaire->password ?>">
                        </div>
                        <div id="modify" class="form-group">
                            <input type="submit" class="btn btn-success my-2" value="Modifier" name="modifier">
                            <a href="index.php" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                    </div>

                </div>
                </div>
                </div>

                <!-- Modal for Confirmation with a unique ID for each stagiaire -->
                <div class="modal fade" id="deleteModal<?= $stagiaire->id ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirmer la suppression</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Êtes-vous sûr de vouloir supprimer cet élément ?
                    </div>
                    <div class="modal-footer">
                        <a href="index.php" class="btn btn-secondary">Annuler</a>
                        <a href="destroy.php?id=<?= $stagiaire->id ?>"  class="btn btn-danger">Supprimer</a>
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