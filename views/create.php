<?php
$titlehd = "Ajouter stagiaire";
$title = "Ajouter stagiaire" . "<hr>";


ob_start(); // from here we want to start recovering html below to $content variable
?>


    <form action="index.php?action=store" method="post" class="border p-3 rounded">

        <div class="form-group">
            <label for="nom"></label>
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom de famille">
        </div>
        <div class="form-group">
            <label for="prenom"></label>
            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
        </div>
        <div class="form-group">
            <label for="age"></label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Age" min="0" max="98" required>
        </div>
        <div class="form-group">
            <label for="login"></label>
            <input type="text" class="form-control" name="login" id="login" placeholder="Login">
        </div>
        <div class="form-group">
            <label for="password"></label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe" minlength="8" maxlength="20" required>
        </div>
        <div class="form-group">
            <label for="commentaire"></label>
            <!-- This input is like the textarea below <input type="text" class="form-control" name="commentaire" id="commentaire" placeholder="Saisir votre commentaire"> -->
            <textarea class="form-control" name="commentaire" id="commentaire" placeholder="Saisir votre commentaire"></textarea>
        </div>
        <div  id="createbtn" class="form-group">
            <a href="/mvc-php/" class="btn btn-outline-secondary btn-sm my-2 my-sm-3">Annuler</a>
            <input type="submit" class="btn btn-outline-primary btn-sm my-2 my-sm-2" value="Ajouter" name="ajouter">
        </div>

    </form>


<?php $content = ob_get_clean();  // here we stop and recovered all html above to $content variable   ?>  
<?php include_once 'views/layout.php'; ?>