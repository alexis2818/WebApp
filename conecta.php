<?php
$link = mysql_connect("localhost","root","")or die("<h2>No se encuentra el servidor</h2>");;
$db = mysql_select_db("registro",$link)or die("<h2>Error de conexion</h2>");

$Email=$_POST[`EmialdelUsuario`];
$password=$_POS[`PassworddelUsuario`];
$pass = $_POST[`PassDelUsuario`];

$req = (strlen($Email)*strlen($password)*srteln($pass))or die("No se han llenado los campos<br><br><a href=`registro.html`>");

if ($password != $pass ) {
  die(`Las contraseñas&ntilde; as no coinciden <br><br><a href="index.html">Volver</a>`);
}
$contraseñusuario = md5($password);

mysql_query("INSERT INTO dato VALUES('','$Nombre','$Apellido','$Email','$contraseña')",$link)or die("<h2>Error de envio</h2>");

echo '
<h2>Registro Completo</h2>
<h5>Gracias por el registro</h5>
<a href="navbar.php">Logearse</a>
';
?>
