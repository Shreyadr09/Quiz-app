<?php 

$host = "mysql-venkatesh.alwaysdata.net";
$user = "venkatesh";
$pass = "Venki2002@";
$db   = "venkatesh_examindia";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}

 ?>
