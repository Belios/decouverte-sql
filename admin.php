<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="admin.css">
    <title></title>
  </head>
  <body>




<?php
//
// include "connexion.php";
//
// // if (isset($_POST['submit'])) {
// //   extract($_POST);
// //
// //   print_r($_POST);
// // }
//
// try {
//   $stmt = $conn ->prepare('INSERT INTO formulaire (titre, contenu) VALUES (:titre, :contenu)');
//   $stmt->execute(array(
//     ':titre' => $_POST['titre'],
//     ':contenu' => $_POST['contenu']
//   ))
// }
//
// catch (\Exception $e) {
//   echo $e->getMessage();
// }


 ?>

 <?php

include "connexion.php";
?>

<!-- <section class="container">

  <h1 class="text-center">Page d'administration SQL</h1>
  <hr>
  <a href="index.php">Revenir au site</a>
  <hr>

   Connection serveur -->
<!--  <p class="font-weight-bold">Connection à la basse de donnée "portfolio" :</p> -->
  <?php
  if (isset($connS)) {
    echo $connS . "<hr>";
  }
  elseif (isset($connF)) {
    echo $connF;
  }
  ?>

  <!-- Pour faire une entrée dans la base donnée -->
  <!-- <p class="font-weight-bold">Effectuer une nouvelle entrée dans la table "propos" :</p> -->

  <?php
    if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {
      try {
        $add_content= $conn->prepare('INSERT INTO formulaire (titre, contenu) VALUES (:titre, :contenu)');
        $add_content->execute(array(
          ':titre' => $_POST['titre'],
          ':contenu' => $_POST['contenu'],
          ':id' => $_POST['id']

        ));
      } catch (\Exception $e) {
        echo $e->getMessage();
      }
    }
    else {
      echo "<u>Compléter les 3 champs :</u>";
    }
  ?>

  <!-- <form action="" method="post">
    <br>
    <label for="titre" class="col-sm-1 align-top">Titre</label>
    <input type="text" name="titre" value="" class="col-sm-2 align-top">
    <br>
    <label for="contenu" class="col-sm-1 align-top">Contenu</label>
    <textarea name="contenu" rows="10" class="col-sm-10 align-top"></textarea>
    <br>
    <input type="submit" name="submit" value="Envoyer" class="col-sm-2">
  </form>
  <hr> -->




  <!-- Pour afficher la dernière entrée du champ "contenu" de la base de données -->
  <!-- <p class="font-weight-bold">Dernière entrée du champ "contenu" de la table "propos" :</p> -->
  <?php
    // echo $lastPropos['contenu']. '<hr>';
  ?>


  <!-- Pour afficher toutes les entrées et les champs de la base de données -->
  <!-- <p class="font-weight-bold">Contenu de la table "propos" :</p> -->
  <?php
  $sql = "SELECT * FROM formulaire ";
  echo "<table class='table table-hover table-striped'>
          <thead>
            <tr>
              <th>id.</th>
              <th>Titre</th>
              <th>Date</th>
              <th>Contenu</th>
            </tr>
          </thead>
          <tbody>";
  foreach ($conn -> query($sql) as $row) {
    echo "<tr><td>" . $row['id'] . var_dump($_POST['id']) . "</td>";
    echo "<td>" . $row['titre'] . var_dump($_POST['titre']) . "</td>";
    echo "<td>" . $row['date_now'] . "</td>";
    echo "<td>" . $row['contenu'] . var_dump($_POST['contenu']) .  "</td></tr>";
  }
  echo "</tbody></table><hr>";
  ?>




</section>

<?php

?>

<form class="" action="" method="post" style="display:flex; flex-direction:column;">
  <label for="titre">Titre</label>
    <input type="text" name="titre" value="">

    <label for="id">ID</label>
     <input type="text" name="id" value="">

  <label for="contenu">Contenu</label>
  <input type="text" name="contenu" value="">

  <input type="submit" name="submit" value="envoyer">
</form>

<div class="second_page">
  <div class="image-holder">
    <div class="headline_about">
      <h2 class="headline"> À propos </h2>
      <p class="about"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
    </div>
  </div>
</div>

</body>
</html>
