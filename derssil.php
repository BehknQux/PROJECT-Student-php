<?php include "database.php";

    $id = $_GET["id"];

    $delete = $db->prepare("DELETE FROM ders WHERE id=:id");
    $delete->bindParam(":id",$id,PDO::PARAM_INT);
    $delete->execute();

    header("Location:ders.php")

?>