<?php

$erreurs = '';
$db = new PDO("mysql:host=localhost;dbname=todolist", 'root', '');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['creer_tache'])) { // On vérifie que la variable POST existe
  if (empty($_POST['creer_tache'])) {  // On vérifie qu'elle as une valeure
      $erreurs = 'Vous devez indiquer la valeure de la tâche';
  } else {
      $task = $_POST['creer_tache'];
      $db->exec("INSERT INTO todo(task) VALUES('$task')"); // On insère la tâche dans la base de donnée
  }
}

if(isset($_GET['delete_task'])) {
  $id = $_GET['delete_task'];
  $db->exec("DELETE FROM todo WHERE id=$id");
}

?>
