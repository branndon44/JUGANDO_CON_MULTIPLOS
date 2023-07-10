<?php
include "dbConnection.php";

$usuario = $_POST['usuario'];
$contrasena = hash("sha256", $_POST['contrasena']);
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$sql = "SELECT usuario From usuarios WHERE usuario = '$usuario'";
$result = $pdo ->query($sql);

if($result->rowCount()>0)
{
  $data = array('done'=> false, 'message' => "error este usuario ya existe" );
  Header('Content-Type: application/json');
  echo json_encode($data);
  exit();
}
else
{
$sql = "INSERT INTO usuarios  SET  usuario = '$usuario', contrasena='$contrasena',  nombres = '$nombres', apellidos='$apellidos'";
$pdo ->query($sql);

$data = array('done'=> true, 'message' => "Usuario nuevo creado" );
Header('Content-Type: application/json');
echo json_encode($data);
exit();
}

?>
