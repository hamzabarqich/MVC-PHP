<?php
$title = "Liste des stagiaires";

ob_start(); // from here we want to start recovering html below to $content variable
?>
<hr>
<div id="ajouter"><a href="index.php?action=create" class="btn btn-outline-primary btn-sm my-2 my-sm-0">Ajouter stagiaire</a></div>
<br>
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Login</th>
            <th>Commentaire</th>
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
                <td><?= $stagiaire->commentaire ?></td>
                <td>
                <!-- Your Delete and Modify Button that triggers the modal -->
                <div class="d-flex flex-wrap gap-1 justify-content">
                    <a href="#" class="btn btn-outline-success btn-sm my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#modifyModal<?= $stagiaire->id ?>">Modifier</a>
                    <a href="#" class="btn btn-outline-danger btn-sm my-2 my-sm-0" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $stagiaire->id ?>">Supprimer</a>
                </div>

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
                        <div class="form-group">
                            <label for="commentaire">Commentaire</label>
                            <!-- This input is like the textarea below <input type="text" class="form-control" name="commentaire" id="commentaire" placeholder="Saisir votre commentaire" value="<?= $stagiaire->commentaire ?>"> -->
                            <textarea class="form-control" name="commentaire" id="message-text" placeholder="Saisir votre commentaire" value="<?= $stagiaire->commentaire ?>"></textarea>
                            </div>
                        <div id="modify" class="form-group">
                            <a href="index.php?action=list" class="btn btn-outline-secondary btn-sm my-2 my-sm-0">Annuler</a>
                            <input type="submit" class="btn btn-outline-success btn-sm my-2 my-sm-2" value="Modifier" name="modifier">
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
                        <a href="index.php?action=list" class="btn btn-outline-secondary btn-sm my-2 my-sm-0">Annuler</a>
                        <a href="destroy.php?id=<?= $stagiaire->id ?>"  class="btn btn-outline-danger btn-sm my-2 my-sm-0">Supprimer</a>
                    </div>
                    </div>
                </div>
                </div>

                </td>
            </tr>

            

        <?php endforeach; ?>
    </tbody>
</table>

<!--  It is used to display navigation links that allow users to navigate through pages of content, such as a list of items in a paginated table -->
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<?php $content = ob_get_clean();  // here we stop and recovered all html above to $content variable   ?>  
<?php include_once 'views/layout.php'; ?>

