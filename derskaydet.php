<?php include "database.php";

if (isset($_GET['ekle'])) {

    $add = $db->prepare("INSERT INTO ders SET dersler='{$_GET['dersler']}'");
    $sonuc = $add->execute();
    if ($sonuc) {
        header("Location:ders.php");
    }
}
?>