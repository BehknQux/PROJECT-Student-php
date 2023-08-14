<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Öğrenci Kayıt</title>
</head>

<body>
    <?php include "database.php";
    $sorgu2 = $db->prepare("SELECT * FROM iller");
    $sorgu2->execute();
    ?>

    <div class="container">
        <h1 class="d-flex justify-content-center mt-3">Kayıt Girişi</h1>
        <div class="d-flex justify-content-center my-5">
            <form action="save.php" method="post">
                <div class="my-1">Tc kimlik<input type="text" class="form-control" name="tc"></div>
                <div class="my-1">Ad<input type="text" class="form-control" name="ad"></div>
                <div class="my-1">Soyad <input type="text" class="form-control" name="soyad"></div>
                <div class="my-1">Telefon<input type="text" class="form-control" name="gsm"></div>
                <div class="my-1"> Şehir
                    <select class="form-select" name="il" id="il">
                        <?php foreach ($sorgu2 as $postcek) { ?>
                            <option value="<?php echo $postcek["name"] ?>"><?php echo $postcek["name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="my-1">Cinsiyet<br>
                    <input class="form-check-input mx-1" type="radio" name="gender" value="Erkek">Erkek
                    <input class="form-check-input mx-1" type="radio" name="gender" value="Kadın">Kadın
                    <input class="form-check-input mx-1" type="radio" name="gender" value="Diğer">Diğer
                </div><br>
                <div>
                    <input class="btn btn-primary w-100 my-1" type="submit" value="GÖNDER" name="submit">
                    <input class="btn btn-warning w-100 my-1" type="submit" value="KİŞİLERİ GÖSTER" name="open">
                    <a href="ders.php" class="btn btn-secondary w-100 my-1">DERSLERİ GÖSTERT</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>