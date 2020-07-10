<?php

include("config.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio-database";

$sql = mysql_connect($servername, $username, $password)
or die("MySQL database '". portfolio-database ."' not accessible.<br>");

mysql_select_db(portfolio-database, $sql)
or die("Enable to select ". portfolio-database ." database<br>");

print_r($_POST);

$tablename = $table_prefix.$_POST['tablename'];
$query = "CREATE TABLE $tablename(" ;
$flag = false;

foreach($_POST as $name => $value)
{
  if($name == "Submit") continue;
  if($name == "tableau_portfolio") continue;

  if($flag) $query .= ",";
  $query .= "$name varchar($value) ";
  if($name == "ID") $name .= " PRIMARY NOT NULL";
  else
  if($name == 'name') $name .= " NOT NULL";
  $flag = true;
}

$query.=")";

echo $query."<br>";

mysql_query("DROP TABLE $tablename", $sql);
$x = mysql_query($query,$sql);
if($x == false)
{
  echo "Error, ", mysql_error(), "<br>";
}

?>
