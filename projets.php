<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="projets.css">
    <title></title>
  </head>
  <body>

<?php
  include "connexion.php";
 ?>


<div class="tableau">
<?php


$sql = "SELECT * FROM projets ORDER BY id DESC LIMIT 10";
echo "<table class='table table-hover table-striped'>
        <thead>
          <tr>
            <th>id.</th>
            <th>Titre</th>
            <th>Date</th>
            <th>Resumé</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>";
foreach ($conn -> query($sql) as $row) {
  echo "<tr><td>" . $row['id'] . "</td>";
  echo "<td>" . $row['titre'] . "</td>";
  echo "<td>" . $row['actual_date'] . "</td>";
  echo "<td>" . $row['resume'] .  "</td>";
  echo "<td>" . $row['image'] .  "</td></tr>";
}
echo "</tbody></table><hr>";

?>
  </div>

  <div class="cont">
  	<div class="slider"></div>
  	<ul class="nav"></div>
  	<div data-target='right' class="side-nav side-nav--right"></div>
  	<div data-target='left' class="side-nav side-nav--left"></div>
  </div>

<script src="projets.js"></script>
</body>
</html>
