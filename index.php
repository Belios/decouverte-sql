<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Exercice SQL</title>
  </head>
  <body>
    <?php
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "exercice-sql";
    //
    // try {
    //   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //   // set the PDO error mode to exception
    //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    // } catch(PDOException $e) {
    //   echo "Connection failed: " . $e->getMessage();
    // }
    //
    // $sql = "SELECT `palmer` FROM `table 1`";
    // foreach ($conn -> query($sql) as $row) {
    //   echo $row["first_name"] . $row["last_name"] . "<br>";
    //
    //
    // }


    ?>

    <!-- Exemple n°1 -->
    <?php
    // echo "<table style='border: solid 1px black;'>";
    //  echo "<tr><th>id</th><th>first_name</th><th>last_name</th></tr>";
    //
    // class TableRows extends RecursiveIteratorIterator {
    //     function __construct($it) {
    //         parent::__construct($it, self::LEAVES_ONLY);
    //     }
    //
    //     function current() {
    //         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    //     }
    //
    //     function beginChildren() {
    //         echo "<tr>";
    //     }
    //
    //     function endChildren() {
    //         echo "</tr>" . "\n";
    //     }
    // }
    //
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "exercice-sql";
    //
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $stmt = $conn->prepare("SELECT id, first_name, last_name, gender, ip_address, birth_date, zip_code, avatar_url, state_code, country_code FROM `table 1` WHERE last_name LIKE 'palmer%'");
    //     $stmt->execute();
    //
    //     // set the resulting array to associative
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //
    //     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    //         echo $v;
    //     }
    // }
    // catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    // $conn = null;
    // echo "</table>";
    ?>

    <!-- Fin Exemple n°1 -->

    <!-- Exemple n°2 -->
    <?php
    // echo "<table style='border: solid 1px black;'>";
    //  echo "<tr><th>id</th><th>first_name</th><th>last_name</th></tr>";
    //
    // class TableRows extends RecursiveIteratorIterator {
    //     function __construct($it) {
    //         parent::__construct($it, self::LEAVES_ONLY);
    //     }
    //
    //     function current() {
    //         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    //     }
    //
    //     function beginChildren() {
    //         echo "<tr>";
    //     }
    //
    //     function endChildren() {
    //         echo "</tr>" . "\n";
    //     }
    // }
    //
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "exercice-sql";
    //
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $stmt = $conn->prepare("SELECT id, first_name, last_name, gender, ip_address, birth_date, zip_code, avatar_url, state_code, country_code FROM `table 1` WHERE gender LIKE 'female%'");
    //     $stmt->execute();
    //
    //     // set the resulting array to associative
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //
    //     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    //         echo $v;
    //     }
    // }
    // catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    // $conn = null;
    // echo "</table>";
    ?>
    <!-- Fin exemple n°2 -->

    <!-- Exemple n°3 -->

    <?php
    // echo "<table style='border: solid 1px black;'>";
    //  echo "<tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Genre</th><th>Adresse IP</th><th>Date de Naissance</th><th>Code Postal</th><th>URL</th><th>Etat</th><th>Pays</th></tr>";
    //
    // class TableRows extends RecursiveIteratorIterator {
    //     function __construct($it) {
    //         parent::__construct($it, self::LEAVES_ONLY);
    //     }
    //
    //     function current() {
    //         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    //     }
    //
    //     function beginChildren() {
    //         echo "<tr>";
    //     }
    //
    //     function endChildren() {
    //         echo "</tr>" . "\n";
    //     }
    // }
    //
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "exercice-sql";
    //
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $stmt = $conn->prepare("SELECT id, first_name, last_name, gender, ip_address, birth_date, zip_code, avatar_url, state_code, country_code FROM `table 1` WHERE country_code LIKE 'N%'");
    //     $stmt->execute();
    //
    //     // set the resulting array to associative
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //
    //     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    //         echo $v;
    //     }
    // }
    // catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    // $conn = null;
    // echo "</table>";
    ?>

    <!-- Fin exemple n°3 -->

    <!-- Exemple n°4 -->

    <?php
    // echo "<table style='border: solid 1px black;'>";
    //  echo "<tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Email</th><th>Genre</th><th>Adresse IP</th><th>Date de Naissance</th><th>Code Postal</th><th>URL</th><th>Etat</th><th>Pays</th></tr>";
    //
    // class TableRows extends RecursiveIteratorIterator {
    //     function __construct($it) {
    //         parent::__construct($it, self::LEAVES_ONLY);
    //     }
    //
    //     function current() {
    //         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    //     }
    //
    //     function beginChildren() {
    //         echo "<tr>";
    //     }
    //
    //     function endChildren() {
    //         echo "</tr>" . "\n";
    //     }
    // }
    //
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "exercice-sql";
    //
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $stmt = $conn->prepare("SELECT id, first_name, last_name, email, gender, ip_address, birth_date, zip_code, avatar_url, state_code, country_code FROM `table 1` WHERE email LIKE '%google%'");
    //     $stmt->execute();
    //
    //     // set the resulting array to associative
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //
    //     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    //         echo $v;
    //     }
    // }
    // catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    // $conn = null;
    // echo "</table>";
    ?>
    <!-- Fin exercice n°4 -->

    <!-- Exercice n°5 -->
    <?php
    // echo "<table style='border: solid 1px black;'>";
    //  echo "<tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Email</th><th>Genre</th><th>Adresse IP</th><th>Date de Naissance</th><th>Code Postal</th><th>URL</th><th>Etat</th><th>Pays</th><th>Compte</th></tr>";
    //
    // class TableRows extends RecursiveIteratorIterator {
    //     function __construct($it) {
    //         parent::__construct($it, self::LEAVES_ONLY);
    //     }
    //
    //     function current() {
    //         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    //     }
    //
    //     function beginChildren() {
    //         echo "<tr>";
    //     }
    //
    //     function endChildren() {
    //         echo "</tr>" . "\n";
    //     }
    // }
    //
    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "exercice-sql";
    //
    // try {
    //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $stmt = $conn->prepare("SELECT country_code, COUNT(*) AS Country FROM `table 1` GROUP BY country_code ORDER BY Country ASC");
    //     $stmt->execute();
    //
    //
    //     // set the resulting array to associative
    //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //
    //     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    //         echo $v;
    //     }
    // }
    // catch(PDOException $e) {
    //     echo "Error: " . $e->getMessage();
    // }
    //
    // $conn = null;
    // echo "</table>";
    ?>

    <!-- Fin exercice n°5 -->

    <!-- Exercice n°6 -->

    <!-- Ajouter un utilisateur -->
    <?php
//     echo "<table style='border: solid 1px black;'>";
//      echo "<tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Email</th><th>Genre</th><th>Adresse IP</th><th>Date de Naissance</th><th>Code Postal</th><th>URL</th><th>Etat</th><th>Pays</th></tr>";
//
//     class TableRows extends RecursiveIteratorIterator {
//         function __construct($it) {
//             parent::__construct($it, self::LEAVES_ONLY);
//         }
//
//         function current() {
//             return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
//         }
//
//         function beginChildren() {
//             echo "<tr>";
//         }
//
//         function endChildren() {
//             echo "</tr>" . "\n";
//         }
//     }
//
//     $servername = "localhost";
//     $username = "root";
//     $password = "";
//     $dbname = "exercice-sql";
//
//     try {
//         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         $adduser = "INSERT INTO `table 1` (first_name, last_name, email) VALUES ('Alfred','Hitchcock','a.hitch@codeur.online')";
//
//
//   $conn->exec($adduser);
//   echo "L'utilisateur a bien été créé.";
//   }
//   catch(PDOException $e) {
//   // roll back the transaction if something failed
//   $conn->rollback();
//   echo "Error: " . $e->getMessage();
// }
//   echo "</table>";
    ?>

    <!-- Changer l'adresse mail -->
    <?php
    echo "<table style='border: solid 1px black;'>";
     echo "<tr><th>ID</th><th>Prénom</th><th>Nom</th><th>Email</th><th>Genre</th><th>Adresse IP</th><th>Date de Naissance</th><th>Code Postal</th><th>URL</th><th>Etat</th><th>Pays</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
            parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
            return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren() {
            echo "<tr>";
        }

        function endChildren() {
            echo "</tr>" . "\n";
        }
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "exercice-sql";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE `table 1` SET email = 'justin.vert@gmail.com' WHERE first_name = '%Alfred%'";
    // // Prepare la declaration
    $stmt = $conn->prepare($sql);
    // execute la requête
    $stmt->execute();
    }
    catch(PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }
    echo "</table>";

// Compte le nombre d'hommes et de femmes

    $sql = "SELECT COUNT(*) AS Hommes FROM `table 1` WHERE gender = 'Male'";
    echo "<b> nombre d'hommes: </b> <br>";
    foreach ($conn -> query($sql) as $row) {
      echo $row['Hommes'] . "<br>";
    }

    $sql = "SELECT COUNT(*) AS Femmes FROM `table 1` WHERE gender = 'Female'";
    echo "<b> nombre de femmes: </b> <br>";
    foreach ($conn -> query($sql) as $row) {
      echo $row['Femmes'] . "<br>";
    }

    $sql = "SELECT gender, AVG(DATEDIFF(CURRENT_DATE, STR_TO_DATE(birth_date, '%d/%m/%Y'))/365) AS age FROM `table 1` WHERE gender = 'Male' ";
    foreach($conn -> query($sql) as $row) {
      echo "Moyenne d'âge des hommes : " . $row['age'] . "<br>";
    }

    $sql = "SELECT gender, AVG(DATEDIFF(CURRENT_DATE, STR_TO_DATE(birth_date, '%d/%m/%Y'))/365) AS age FROM `table 1` WHERE gender = 'Female' ";
      foreach($conn -> query($sql) as $row) {
        echo "Moyenne d'âge des femmes : " . $row['age'] . "<br>" ;
    }

    ?>

    <!-- Supprimer un utilisateur  -->
    <!-- Fin exercice n°6 -->

  </body>
</html>
