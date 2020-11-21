<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proyecto web";

$conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn)
{
  die("no hay conexion: ".mysql1_connect_error());
}
$nombre = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT ' FROM login WHERE usuario = '".$nombre."' and password = '".$password."'");
$nr = mysqli_num_rows($query);

if ($nr == 1)
{
  //header("Location: pagina.html")
  echo "Bienvenido: " .$nombre;
}
else if ($nr == 0)
{
  echo "No ingreso";
}

 ?>
