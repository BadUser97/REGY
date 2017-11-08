<?php
 
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
 
if(empty($usuario) || empty($pass)){
header("Location: index.php");
exit();
}
 
mysql_connect('localhost','root','root') or die("Error al conectar " . mysql_error());
mysql_select_db('cobach') or die ("Error al seleccionar la Base de datos: " . mysql_error());
 
$result = mysql_query("SELECT * from sesion where usuario='" . $usuario . "'");
 
if($row = mysql_fetch_array($result)){
if($row['contraseña'] == $contraseña){
session_start();
$_SESSION['usuario'] = $usuario;
header("Location: contenido.php");
}else{
header("Location: index.html");
exit();
}
}else{
header("Location: index.html");
exit();
}
 
 
?>