<!-- Les opérateurs arithmétiques  -->

<!-- L’addition : l’opérateur se note +. -->

<!-- La soustraction : l’opérateur se note -. -->

<!-- La multiplication : l’opérateur se note *. -->

<!-- La division : l’opérateur se note /. -->


<!-- Le modulo : l’opérateur modulo retourne le reste de la division entre deux nombres. Elle se note %. -->

<?php

// $addition = 2 + 4;
// $soustraction = 6 - 2;
// $multiplication = 5 * 3;
// $division = 15 / 3;
// $modulo = 5 % 2;
// echo "Addition: 2 + 4 = ".$addition."<br />";
// echo "Soustraction: 6 - 2 = ".$soustraction."<br />";
// echo "Multiplication:  5 * 3 = ".$multiplication."<br />";
// echo "Division: 15 / 3 = ".$division."<br />";
// echo "Modulo: 5 % 2 = $modulo";

?>

<!-- L’incrémentation -->


<!-- L’opérateur se note ++.

Il faut faire la différence entre ++$nombre et $nombre++!! L’ordre dans lequel on place l’opérateur a une importance :

+$nombre incrémente $nombre puis retourne $nombre.
$nombre++ retourne $nombre puis l’incrémente. -->

<?php

$nombre = 10;
echo ++$nombre; //incrémente puis affiche
echo ";";
echo $nombre;

// ?>
//
//
// <?php

$nombre = 10;
echo $nombre++; //affiche puis incrémente
echo ";";
echo $nombre;
//
// ?>
//
// <?php
//
$nombre = 10;
echo $nombre--; //affiche puis décrémente
echo ";";
echo $nombre;

?>

<!-- Opérateurs de comparaison  -->




<!-- Exercice :  -->

<?php
  // $a = '2';    // Type string
  // $b = 2;      // Type entier
  // $c = 2;      // Type entier
  //
  // // Comparaison sur les valeurs
  // if($a != $b)
  // {
  //   echo '$a et $b ont la même valeur !';
  // }
  //
  // // Comparaison sur les valeurs et les types
  // if($a === $c)
  // {
  //   echo '$a et $c sont de même valeur et de même type !';
  // }
// ?>


<!-- Comparaison de tableau  -->

<?php
$a = array("a" => "pomme", "b" => "banane");
$b = array("a" =>"poire", "b" => "fraise", "c" => "cerise");

$c = $b + $a; // Union de $a et $b
echo "Union de \$a et \$b : \n";
var_dump($c);

$c = $b + $a; // Union de $b et $a
echo "Union de \$b et \$a : \n";
var_dump($c);
?>


<!-- Opérateurs logique  -->

<?php
        $x = 4; //On affecte la valeur 4 à $x
        $y = -12; //On affecte la valeur -12 à $y

        if($x >= 0 && $x <= 5){
            echo '$x contient une valeur entre 0 et 5 <br>';
        }

        if($x >= 0 AND $y >= 0){
            echo '$x et $y contiennent une valeur positive <br>';
        }

        if($x >= 0 OR  $y >= 0){
            echo '$x ou $y (ou les deux) contient une valeur positive <br>';
        }

        if($x >= 0 XOR $y >= 0){
            echo '$x ou $y contient une valeur positive mais pas les deux';
        }
    ?>
    @include('fichier.php')
