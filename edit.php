<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Kayıt Düzenle</title>
</head>

<body>

    <?php include "database.php";

    $ild = $db->query("SELECT * FROM iller");
    $ild->execute();

    $srgcek = $db->query("SELECT * FROM students WHERE id={$_GET['id']}");
    $srgcek->execute();

    $sorgucek = $srgcek->fetch(PDO::FETCH_ASSOC);

    ?>

    <div class="container">
        <h1 class="d-flex justify-content-center mt-3">Kayıt Düzenleme</h1>
        <div class="d-flex justify-content-center my-5">

            <form action="edit_save.php" method="post">

                <div class="my-1">Tc kimlik<input type="text" class="form-control" name="tc"
                        value="<?php echo $sorgucek['tc'] ?>"></div>
                <div class="my-1">Ad<input type="text" class="form-control" name="ad"
                        value="<?php echo $sorgucek['ad'] ?>"></div>
                <div class="my-1">Soyad <input type="text" class="form-control" name="soyad"
                        value="<?php echo $sorgucek['soyad'] ?>"></div>
                <div class="my-1">Telefon<input type="text" class="form-control" name="gsm"
                        value="<?php echo $sorgucek['gsm'] ?>"></div>
                <div class="my-1">Şehir
                    <select class="form-select" name="il" id="il">
                        <?php foreach ($ild as $postcek) { ?>
                            <option value="<?php echo $postcek["name"] ?>"><?php echo $postcek["name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="my-1">Cinsiyet<br>*
                    <input class="form-check-input mx-1" type="radio" name="gender" value="Erkek" <?php echo ($sorgucek['gender'] == "Erkek") ? "checked" : ""; ?>>Erkek
                    <input class="form-check-input mx-1" type="radio" name="gender" value="Kadın">Kadın
                    <input class="form-check-input mx-1" type="radio" name="gender" value="Diğer" checked>Diğer
                </div>
                <br>
                <input class="btn btn-success w-100" type="submit" name="update">
                <input type="hidden" value="<?php echo $sorgucek['id'] ?>" name="id">
            </form>
        </div>
    </div>

</body>

</html>