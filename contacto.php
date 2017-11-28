<?php
require_once 'header.php';
require_once 'validacion.php';
require_once 'db.php';



$name = "";
$email = "";
$cel_phone = "";
$message = "";

$errores = [];
if($_POST){
  $errores = validarInformacion($informacion);
   if(count($errores)==0){
     echo "Tu consulta fue enviada en breve nos comunicaremos con vos";
   }
 }
 ?>
<section class="contactos">

<fieldset class="form_contact">
  <br>

  <form class="contacto" action="contacto.php" method="post">
    <input type="text" name="name" value=""placeholder="Nombre">
    <?php

    // $errores['name']="";
    if (!empty($errores['name'])) {
      echo $errores['name'];
        }
     ?>
    <br>
    <input type="email" name="email" value="" placeholder="Correo Electrónico">
    <?php
    if (!empty($errores['mail'])) {
      echo $errores['mail'];
        }
     ?>
    <br>
    <input type="number" name="cel_phone" value=""placeholder="Celular">
    <?php
    if (!empty($errores['cel_phone'])) {
      echo $errores['cel_phone'];
        }
     ?>
    <br>
    <input type="hidden" name="admin" value="0">
    <br>
    <label for="">Mensaje</label>
    <br>

    <?php
    if (!empty($errores['message'])) {
      echo $errores['message'];
        }
     ?>
    <br>
    <br>
    <textarea class="mensaje"name="message" rows="8" cols="80"></textarea>
    <br>
    <br>
    <button type="submit" name="button">ENVIAR</button>
    <br>
  </form>

</fieldset>
<fieldset class="data">
  <h2>Donde estamos</h2>
    <strong>Dirección: </strong><p>Luzuriaga 1123, Hurlingham, Provincia de Buenos Aires</p>
    <strong>Teléfono: </strong><p>(011) 4662-8435</p>
    <strong>Horario de Atención: </strong><p>Lunes a viernes: 8:00 a 18:00, sábados: 8:00 a 13:00</p>
</fieldset>
</section>
<br>
<button class="back"type="button" name="volver"><a href="index.php">volver</a></button>
<?php
require_once 'footer.php'
 ?>
