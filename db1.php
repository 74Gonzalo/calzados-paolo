<?php

$a = $_POST;
if (empty($a)) {
  $a["name"] = "";
  $a["email"] = "";
  $a["cel_phone"] = "";
  $a["message"] = "";
  $a["admin"] = "";
}

$name = $a["name"];
$email = $a["email"];
$cel_phone = $a["cel_phone"];
$message = $a["message"];
$admin = $a["admin"];

$dsn = 'mysql:host=localhost;dbname=calzados_paolo;charset=utf8mb4;port:3306';
$db_user = "root";
$db_pass = "";
$db = new PDO($dsn, $db_user, $db_pass);
// Recordar siempre lo siguiente, los datos char
// que se ingresen en la db tienen que llevar ''(comilla simple)
// para empezar a normalizar
// cuando ingreso datos a base de datos uso $stmt en vez de $query

// $stmt = $db->prepare("INSERT into users(name,email,cel_phone,message,admin)



$sql =("INSERT into users(default,name,email,cel_phone,message,admin)
VALUES(default,:name,:email,:cel_phone,:message,:admin)");

$stmt = $db->prepare($sql);

$stmt->bindValue(':name',$name, PDO::PARAM_STR);
$stmt->bindValue(':email',$email, PDO::PARAM_STR);
$stmt->bindValue(':cel_phone',$cel_phone, PDO::PARAM_INT);
$stmt->bindValue(':message',$message, PDO::PARAM_STR);
$stmt->bindValue(':admin',$admin, PDO::PARAM_INT);

var_dump($stmt);
$stmt->execute();



$db = null;


 ?>
