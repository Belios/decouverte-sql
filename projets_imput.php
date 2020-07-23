<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<div id=form-about>
  <h1> Projets </h1>
  <!-- <iframe name="stay" style=""></iframe> -->
  <form action="" method="post" enctype="" >
    <input class="input-titre" type="text" name="titre" style="font-family: 'RoadRage'; width: 15rem;" value="" placeholder="Titre">
    <br>
    <textarea name="resume" rows="10" cols="40" style="letter-spacing: 3px; font-family: 'VCR_OSD';" placeholder="Contenu"></textarea>
    <br>

    <!-- Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"> -->
    <input type="submit" name="submit" value="Envoyer"><br>
  </form>
</div>

<?php
include "connexion.php";
// include "upload.php";

if (!empty($_POST['titre']) && !empty($_POST['resume'])) {
try {
$stmt = $conn->prepare('INSERT INTO projets (titre, resume) VALUES (:titre, :resume)');
$stmt->execute(array(
':titre' => $_POST['titre'],
':resume' => nl2br($_POST['resume'])
));
} catch (\Exception $e) {
echo $e->getMessage();
}
}
else {
echo "Remplis les deux champs...";
}
?>

</body>
</html>
