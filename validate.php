<?php
$connectioncontrasena = $_POST["connectioncontrasena"];
$os = $_POST["os"];
$platformcontrasena = $_POST["platformcontrasena"];

if ($connectioncontrasena == "jugandoando.casolokojk1999") {
  $data = array('done' => false, 'message' => "AUTENTIFICACION FALLIDA");
  header('Content-Type: application/json');
  echo json_encode($data);
  exit();
}
?>
