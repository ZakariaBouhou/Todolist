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
    <form class="taches_input" method="post" action="todolist.php">
        <input id="inserer" type="text" name="creer_tache"/>
        <button id="envoyer">Créer</button>
    </form>
</body>