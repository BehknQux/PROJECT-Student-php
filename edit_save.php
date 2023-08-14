<?php include "database.php";

if (isset($_POST["update"])) {

    $tc = $_POST["tc"];
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $gender = $_POST["gender"];
    $gsm = $_POST["gsm"];
    $il = $_POST["il"];
    $id = $_POST["id"];

    $info = array(

        "tc" => $tc,
        "ad" => $ad,
        "soyad" => $soyad,
        "gender" => $gender,
        "gsm" => $gsm,
        "il" => $il,
        "id" => $id

    );

    $update = $db->prepare("UPDATE students SET
            tc=:tc,
            ad=:ad,
            soyad=:soyad,
            gender=:gender,
            gsm=:gsm,
            il=:il
            WHERE id=:id
        ");

    $sonuc = $update->execute($info);
    
//     $sorgu=$db->prepare("UPDATE students SET tc=:tc, ad=:ad, soyad=:soyad, gender=:gender, gsm=:gsm, il=:il WHERE id={$_POST['id']}");
//     $sonuc=$sorgu->execute(array(
//         'tc'=>$_POST['tc'],
//         'ad'=>$_POST['ad'],
//         'soyad'=>$_POST['soyad'],
//         'gender'=>$_POST['gender'],
//         'gsm'=>$_POST['gsm'],
//         'il'=>$_POST['il']
//     ));

//     if ($sonuc) {
//         echo "başarılı";
//     } else {
//         echo "başarısız";
//     }

// }

header("Location:list.php");
}
    ?>