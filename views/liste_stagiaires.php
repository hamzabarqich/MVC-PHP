<?php
$title = "Liste des stagiaires";

ob_start(); // from here we want to start recovering html below to $content variable
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>Login</th>
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
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php $content = ob_get_clean();  // here we stop and recovered all html above to $content variable   ?>  
<?php include_once 'views/layout.php'; ?>