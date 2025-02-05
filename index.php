<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Liste des stagiaires</title>
</head>
<body>
    <?php
        $pdo = new PDO(dsn:'mysql:dbname=mvcphp;host=localhost',username:'root',password:'');

        $stagiaires = $pdo->query('SELECT * FROM stagiaire')->fetchAll(mode: PDO::FETCH_OBJ);
    ?>

    <div class="container mt-2">
        <h2>Liste des stagiaires</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Login</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($stagiaires as $stagiaire): ?>
                <tr>
                    <td><?php echo $stagiaire->id ?></td>
                    <td><?php echo $stagiaire->nom ?></td>
                    <td><?php echo $stagiaire->prenom ?></td>
                    <td><?php echo $stagiaire->age ?></td>
                    <td><?php echo $stagiaire->login ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
