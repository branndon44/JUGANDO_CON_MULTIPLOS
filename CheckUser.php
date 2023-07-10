<?php
include "dbConnection.php";

$usuario = $_POST['usuario'];
$contrasena = hash("sha256", $_POST['contrasena']);


$sql = "SELECT usuario, contrasena FROM usuarios WHERE usuario ='$usuario' AND contrasena ='$contrasena'";
$result = $pdo->query($sql);

if($result->rowCount() > 0)
{
$data = array('done'=> true, 'message' =>"Bienvenido a jugando con multiplos");
Header('Content-Type: application/json');
echo json_encode($data);
exit();
}

else
{
  $data = array('done'=> false, 'message' =>"Nombre de usuario o contraseña incorrectos");
  Header('Content-Type: application/json');
  echo json_encode($data);
  exit();
}

 ?>
