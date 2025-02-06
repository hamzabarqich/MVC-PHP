<?php
$title = "Ajouter stagiaire";

ob_start(); // from here we want to start recovering html below to $content variable
?>
<hr>

    <form action="store.php" method="post">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="prenom">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" class="form-control" name="age">
        </div>
        <div class="form-group">
            <label>Login</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
        </div>

    </form>

<?php $content = ob_get_clean();  // here we stop and recovered all html above to $content variable   ?>  
<?php include_once 'views/layout.php'; ?>