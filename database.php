<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $db = new PDO("mysql:host=$servername;dbname=projects;charset=utf8", $username, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  
}
?>