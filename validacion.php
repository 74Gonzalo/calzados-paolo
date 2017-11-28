<?php
$informacion = $_POST;
$name = "";
$mail = "";
$cel_phone = "";
$message = "";

function validarInformacion($informacion){
  $errores = [];
    $name = trim($informacion['name']);
      if (strlen($name) == 0){
        $errores['name'] = "Por favor ingresá tu nombre";
        }
    $mail = trim($informacion['email']);
      if (!filter_var($mail,FILTER_VALIDATE_EMAIL)&&strlen($mail==0)){
        $errores['mail'] = "Por favor ingresá un e-mail válidos";
      }
    $cel_phone = trim($informacion['cel_phone']);
      if(strlen($cel_phone) < 8){
        $errores['cel_phone'] = "Por favor ingresá un celular válido";
      }
    $message = trim($informacion['message']);
      if (strlen($message)==0||strlen($message)>180){
        $errores['message']="Ingresá un mensaje de hasta 180 caracteres";
      }
  return $errores;
}
// var_dump(validarInformacion($informacion));
?>
