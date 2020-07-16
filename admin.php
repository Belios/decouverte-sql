<?php

include "connexion.php";

// if (isset($_POST['submit'])) {
//   extract($_POST);
//
//   print_r($_POST);
// }

try {
  $stmt = $conn ->prepare('INSERT INTO formulaire (titre, contenu) VALUES (:titre, :contenu)');
  $stmt->execute(array(
    ':titre' => $_POST['titre'],
    ':contenu' => $_POST['contenu']
  ))

} catch (\Exception $e) {
  echo $e->getMessage();
}


 ?>

<form class="" action="" method="post">
  <label for="titre">Titre</label>
    <input type="text" name="titre" value="">


  <label for="contenu">Contenu</label>
  <input type="text" name="contenu" value="">

  <input type="submit" name="submit" value="envoyer">
</form>
