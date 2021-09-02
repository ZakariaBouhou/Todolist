<?php
    require __DIR__ . '/bdd.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoList</title>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style2.css">
</head>
<body>
<div class="header">
    <p class="header_titre">Ma super Todo List ! </p>
</div>
    <form class="taches_input" method="post">
        <input id="inserer" type="text" name="creer_tache"/>
        <button id="envoyer">Créer</button>
    </form>
    <?php
    if (isset($erreurs)) {
        ?>
        <p><?php echo $erreurs ?></p>
        <?php
    }
    ?>
    <table class="tasks">
        <tr>
            <th>
                N
            </th>
            <th>
                Nom de ma tâche
            </th>
            <th>
                Action
            </th>
        </tr>
        <?php
        $reponse = $db->query('Select * from todo'); // On exécute une requête visant à récupérer les tâches
        while ($tasks = $reponse->fetch()) { // On initialise une boucle
            ?>
            <tr>
                <td><?php echo $tasks['id'] ?></td>
                <td><?php echo $tasks['task'] ?></td>
                <td><a class="suppr" href="form.php?delete_task=<?php echo $tasks['id'] ?>"> X</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
 
</body>