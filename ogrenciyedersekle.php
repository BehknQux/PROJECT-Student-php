<?php include "database.php";

$qid = $_POST["id"];

foreach ($_POST["checkbox"] as $key=>$value) {

    $ders_idye_ekle = $db->prepare("INSERT INTO ders_students_pvt SET ders_id=$value, students_id=$qid");
    $ders_idye_ekle->execute();

}

header("Location:list.php") ?>