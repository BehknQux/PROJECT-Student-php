<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dersler</title>
</head>

<body>
    <?php include "database.php";

    $sorgu1 = $db->prepare("SELECT * FROM ders");
    $sorgu1->execute();

    ?>

    <div class="container">

        <h1 class="">DERSLER</h1>
        <a href="dersekle.php" class="btn btn-success">DERS EKLE</a>
        <a href="index.php" class="btn btn-warning">
            <<< Geri Dön <<<</a>
                <ul class="list-group my-5">
                    <?php foreach ($sorgu1 as $row) { ?>

                        <li
                            class="list-group-item list-group-item-action list-group-item-info d-flex justify-content-between align-items-center w-25">
                            <?php echo $row["dersler"]; ?><a class="btn btn-danger"
                                href="derssil.php?id=<?php echo $row["id"] ?>">X</a>
                        </li>

                    <?php } ?>

                </ul>



    </div>

</body>

</html>