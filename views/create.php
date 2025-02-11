<?php
$title = "Ajouter stagiaire";

ob_start(); // from here we want to start recovering html below to $content variable
?>
<hr>

    <form action="store.php" method="post">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Saisir votre nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Saisir votre prénom">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Saisir votre age" min="0" max="98" required>
        </div>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Saisir votre login">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Saisir votre mot de passe" minlength="8" maxlength="20" required>
        </div>
        <div class="form-group">
            <label for="commentaire">Commentaire</label>
            <input type="text" class="form-control" name="commentaire" id="commentaire" placeholder="Saisir votre commentaire">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary my-2" value="Ajouter" name="ajouter">
            <a href="index.php?action=list" class="btn btn-secondary">Annuler</a>
        </div>

    </form>


<?php $content = ob_get_clean();  // here we stop and recovered all html above to $content variable   ?>  
<?php include_once 'views/layout.php'; ?>