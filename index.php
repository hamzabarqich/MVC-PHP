<?php
$title = "Liste des stagiaires";

$pdo = new PDO(dsn:'mysql:dbname=mvcphp;host=localhost',username:'root',password:'');

$stagiaires = $pdo->query('SELECT * FROM stagiaire')->fetchAll(mode: PDO::FETCH_OBJ);

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

<?php include_once 'views/layout.php'; ?>