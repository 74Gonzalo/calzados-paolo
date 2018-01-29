<?php
require_once 'header.php';
require_once 'db.php';
?>

<table>
  <tr>
    <th>Nombre</th>

    <th>e-mail</th>

    <th>Celular</th>
    <th>Mensaje</th>
    <th>Nivel admin</th>
  </tr>
  <td>
    <!--Nombre  -->
    <?php
    for ($i=0; $i < 1 ; $i++) {
    foreach ($results as $key => $value) {
      $name = $value["name"];
      $email = $value["email"];
      $cel_phone = $value["cel_phone"];
      $message = $value["message"];
      $admin = $value["admin"];
      echo $name;
      echo "<br>";
    }
    }
     ?>
  </td>
  <td>
    <!-- e-mail -->
    <?php
    for ($i=0; $i < 1 ; $i++) {
    foreach ($results as $key => $value) {
      $name = $value["name"];
      $email = $value["email"];
      $cel_phone = $value["cel_phone"];
      $message = $value["message"];
      $admin = $value["admin"];
      echo $email;
      echo "<br>";
    }
  }
  ?>
  </td>
  <td>
    <!-- celular -->
    <?php
    for ($i=0; $i < 1 ; $i++) {
    foreach ($results as $key => $value) {
      $name = $value["name"];
      $email = $value["email"];
      $cel_phone = $value["cel_phone"];
      $message = $value["message"];
      $admin = $value["admin"];
      echo $cel_phone;
      echo "<br>";
    }
  }
  ?>
  </td>
  <td>
    <!-- mensaje -->
    <?php
    for ($i=0; $i < 1 ; $i++) {
    foreach ($results as $key => $value) {
      $name = $value["name"];
      $email = $value["email"];
      $cel_phone = $value["cel_phone"];
      $message = $value["message"];
      $admin = $value["admin"];
      echo $message;
      echo "<br>";
    }
  }
  ?>
  </td>
  <td>
    <!-- condición de administrador -->
    <?php
    for ($i=0; $i < 1 ; $i++) {
    foreach ($results as $key => $value) {
      $name = $value["name"];
      $email = $value["email"];
      $cel_phone = $value["cel_phone"];
      $message = $value["message"];
      $admin = $value["admin"];
      echo $admin;
      echo "<br>";
    }
  }
  ?>
  </td>


</table>



<?php
require_once 'footer.php';
 ?>
