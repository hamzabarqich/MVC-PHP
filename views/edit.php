<?php
$title = "Modifier stagiaire";
 ob_start(); // from here we want to start recovering html below to $content variable
?>
<hr>

    <form action="update.php" method="post">
        <div class="form-group">
            <label for="id">Id</label>
            <input type="text" class="form-control" name="id" id="id"  value="<?= $stagiaire->id ?>">
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
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
        </div>

    </form>


<?php $content = ob_get_clean();  // here we stop and recovered all html above to $content variable   ?>  
<?php include_once 'views/layout.php'; ?>