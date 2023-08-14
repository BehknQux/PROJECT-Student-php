<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenciye Ders Ekle</title>
</head>

<body class="bg-dark text-light">
    <?php include "database.php";
    $gid = $_GET['id'];

    ?>

    <?php
    $insert = $db->query("SELECT * FROM ders");
    $insert->execute();
    ?>

    <a class="btn btn-primary m-3" href="list.php">
        <<< Geri Dön <<<</a>

            <div class="container">3

                <h1>Öğrenciye Eklenecek Dersleri Seç</h1>

                <form class="form" action="ogrenciyedersekle.php" method="post">
                    <?php foreach ($insert as $row) { ?>

                        <input type="checkbox" name="checkbox[]" value="<?php echo $row["id"]?>">
                        <?php echo $row["dersler"] ?><br>

                    <?php } ?>

                    <input type="submit" class="btn btn-light mt-2" value="TAMAMLA">
                    <input type="hidden" name="id" value="<?php echo $gid?>">

                </form>
            </div>
</body>

</html>