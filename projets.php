<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="projets.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

<?php
  include "connexion.php";
 ?>


<?php


$sql = "SELECT * FROM projets ORDER BY id DESC LIMIT 1";


echo "<div class='jumbotron'>
      <div class='overlay w-auto h-auto'></div>
        <video playsinline='playsinline' autoplay='autoplay' muted='muted' loop='loop'>
        <source src='uploads/projetsback.mp4' type='video/mp4'>
        </video>";
echo "<div class='card-img-overlay' style='width: 18rem;'>
       <div class='card-body'>
        <h5 class='card-title'>";
           foreach ($conn -> query($sql) as $row) {
              echo "<td>" . $row['titre'] . "</td>";
            }
            echo  "</h5>
        <p class='date-title'>";
            foreach ($conn -> query($sql) as $row) {
              echo "<td>" . $row['actual_date'] . "</td>";
            }
              echo "</p>
         <p class='card-text'>";
            foreach ($conn -> query($sql) as $row) {
              echo "<td>" . $row['resume'] .  "</td>";
         }
              echo  "</p>

         <i class='fa fa-play card-link' href='#'></i>
       </div>
     </div>
    </div>";
    
        ?>


<!-- <div class="tableau"> -->


<?php


// $sql = "SELECT * FROM projets ORDER BY id DESC LIMIT 10";
// echo "<table class='table table-hover table-striped'>
//         <thead style='padding: 0 25px;'>
//           <tr>
//             <th>Titre</th>
//             <th>Date</th>
//             <th>Resumé</th>
//             <th>Image</th>
//           </tr>
//         </thead>
//         <tbody>";
// foreach ($conn -> query($sql) as $row) {
//   echo "<td>" . $row['titre'] . "</td>";
//   echo "<td>" . $row['actual_date'] . "</td>";
//   echo "<td>" . $row['resume'] .  "</td>";
//   echo "<td>" . $row['image'] .  "</td></tr>";
// }
// echo "</tbody></table><hr>";

?>
  <!-- </div> -->

<?php

  // $stmt = $conn->prepare("SELECT * FROM projets ORDER BY id DESC");
  // $stmt->execute();
  // $project_section = $stmt->fetch();
  // foreach ($project_section as $row) {
  //   echo $row['title'] . '<br>';
  //   echo $row['content'];
  //   echo '<img src="'. $row['image'] . '" class="card-img project-image" alt="image">';
  // }

 ?>

<script src="projets.js"></script>
</body>
</html>
