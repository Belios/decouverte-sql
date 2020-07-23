<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title></title>
  </head>
  <body>


<?php
include "connexion.php";

if (!empty($_POST['titre']) && !empty($_POST['contenu'])) {
try {
$stmt = $conn->prepare('INSERT INTO formulaire (titre, contenu) VALUES (:titre, :contenu)');
$stmt->execute(array(
':titre' => $_POST['titre'],
':contenu' => nl2br($_POST['contenu'])
));
} catch (\Exception $e) {
echo $e->getMessage();
}
}
else {
echo "Remplis les deux champs...";
}
?>

<div id=form-about>
  <h1> A propos </h1>
<form class="" action="" method="post">
<input class="input-titre" type="text" name="titre" style="font-family: 'RoadRage'; width: 15rem;" value="" placeholder="Titre">
<br>
<textarea name="contenu" rows="10" cols="40" style="letter-spacing: 3px; font-family: 'VCR_OSD'; " placeholder="Contenu"></textarea>
<br>
<input type="submit" name="submit" value="Créer"><br>
</form>
</div>

<div class="tableau">
<?php

$sql = "SELECT * FROM formulaire ORDER BY id DESC LIMIT 1";
echo "<div class='card mb-3' style='width: 100%;'>
      <div class='c-glitch' style='background-image: url('about2.jpeg');'>
      <div class='c-glitch__img' style='background-image: url('about2.jpeg');'></div>
      <div class='c-glitch__img' style='background-image: url('about2.jpeg');'></div>
      <div class='c-glitch__img'style='background-image: url('about2.jpeg');'></div>
      <div class='c-glitch__img' style='background-image: url('about2.jpeg');'></div>
      <div class='c-glitch__img' style='background-image: url('about2.jpeg');'></div>
      </div>
        <div class='row no-gutters'>
        <div class='col-md-8'>
        <div class='card-body'>
          <h5 class='card-title style='font-size: 22px !important;'>";
           foreach ($conn -> query($sql) as $row) {
            echo "<td>" . $row['titre'] . "</td>";
          }
        echo "</h5>
          <p class='card-text'>";
          foreach ($conn -> query($sql) as $row) {
            echo "<td>" . $row['contenu'] .  "</td>";
          }
          echo "</p>
          <p class='card-text'><small class='text-muted'>";
          foreach ($conn -> query($sql) as $row) {
            echo "<td>" . $row['date_now'] . "</td>";}
          echo "</small></p>
        </div>
      </div>
    </div>
  </div>";


$sql = "SELECT * FROM formulaire WHERE id != (SELECT MAX(id) FROM formulaire) ORDER BY id DESC LIMIT 5";
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
  echo "<tr><td>" . $row['id'] . "</td>";
  echo "<td>" . $row['titre'] . "</td>";
  echo "<td>" . $row['date_now'] . "</td>";
  echo "<td>" . $row['contenu'] .  "</td></tr>";
}
echo "</tbody></table><hr>";

?>
</div>

<div class="project">
  <h1> Projets </h1>


<div class="contact">
  <h1>Contact</h1>
  <form method="post">
    <label>Email</label>
    <input class="mail_line" type="email" name="email" required><br>
    <label>Message</label>
      <textarea name="message" rows="10" cols="100" required></textarea><br>
      <input type="submit">
  </form>
</div>

<?php
if (isset($_POST['message'])) {
$position_arobase = strpos($_POST['email'], '@');
if ($position_arobase === false)
echo '<p>Votre email doit comporter un arobase.</p>';
else {
$retour = mail('w.maunier@codeur.online', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
if($retour)
echo '<p>Votre message a été envoyé.</p>';
else
echo '<p>Erreur.</p>';
}
// session

if (!isset($_SESSION)) {
session_start();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$_SESSION['postdata'] = $_POST;
unset($_POST);
header("Location: ".$_SERVER['PHP_SELF']);
exit;
}
}

?>


</body>
</html>
