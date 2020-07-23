<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio-database";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $connS = "Connected successfully / Connexion effectuée avec succès";
  } catch(PDOException $e) {
    $connF = "Connection failed / Echec de la connexion : " . $e->getMessage();
    echo $connS;
}


?>
