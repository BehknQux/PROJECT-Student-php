<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Kayıt Listesi</title>
</head>

<body>

    <?php include "database.php";

    $sorgu3 = $db->prepare("SELECT * FROM students");
    $sorgu3->execute();

    $bruh = $db->prepare("SELECT ders.dersler FROM ders INNER JOIN ders_students_pvt ON ders.id = ders_students_pvt.ders_id");
    $bruh->execute();

    ?>


    <a class="btn btn-primary m-3" href="./index.php">
        <<< Geri Dön <<<</a>

            <div class="justify-content-center d-flex">
                <table class="table w-75 table-bordered table-hover table-striped align-middle"
                    style="text-align: center;">
                    <thead class="table-header table-dark">
                        <th>#</th>
                        <th>TC KİMLİK NO</th>
                        <th>AD</th>
                        <th>SOYAD</th>
                        <th>CİNSİYET</th>
                        <th>GSM</th>
                        <th>ŞEHİR</th>
                        <th>DERSLER</th>
                        <th>İŞLEMLER</th>
                    </thead>
                    <tbody>

                        <?php
                        $ab = 1;
                        foreach ($sorgu3 as $a) {
                            ?>
                            <tr>
                                <td class="table-dark">
                                    <?php echo $ab++; ?>
                                </td>
                                <td>
                                    <?php echo $a["tc"]; ?>
                                </td>
                                <td>
                                    <?php echo $a["ad"]; ?>
                                </td>
                                <td>
                                    <?php echo $a["soyad"]; ?>
                                </td>
                                <td>
                                    <?php echo $a["gender"]; ?>
                                </td>
                                <td>
                                    <?php echo $a["gsm"]; ?>
                                </td>
                                <td>
                                    <?php echo $a["il"]; ?>
                                </td>
                                <td>
                                    <ul class="list-group list-group-flush bg-transparent">
                                        <?php foreach ($bruh as $bruhh) { ?>
                                            <li class="list-group-item disabled bg-transparent">
                                                <?php echo $bruhh["dersler"] ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </td>
                                <td>
                                    <div class="">
                                        <a class="btn btn-success"
                                            href="edit.php?id=<?php echo $a["id"]; ?>">Düzenle</a><br>
                                        <a class="btn btn-danger" href="delete.php?id=<?php echo $a["id"]; ?>">Sil</a><br>
                                        <a class="btn btn-warning" href="adders.php?id=<?php echo $a["id"]; ?>">Ders
                                            Ekle</a><br>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
</body>