<?php include "database.php";

$id = $_GET["id"];

$delete = $db->prepare("DELETE FROM students WHERE id=:id");
$delete->bindParam(":id",$id,PDO::PARAM_INT);
$delete-> execute();

header("Location:list.php");

?>