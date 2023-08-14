<?php include "database.php";

if (isset($_POST["open"])) {

    header("Location:list.php");
    exit;
}

if (isset($_POST["submit"])) {

    $tc = $_POST["tc"];
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $gender = $_POST["gender"];
    $gsm = $_POST["gsm"];
    $il = $_POST["il"];

    $info = [

        "tc" => $tc,
        "ad" => $ad,
        "soyad" => $soyad,
        "gender" => $gender,
        "gsm" => $gsm,
        "il" => $il

    ];

    $insert = $db->prepare("INSERT INTO students SET
            tc=:tc,
            ad=:ad,
            soyad=:soyad,
            gender=:gender,
            gsm=:gsm,
            il=:il
        ");

    $insert->execute($info);
}

header("Location:index.php")

    ?>