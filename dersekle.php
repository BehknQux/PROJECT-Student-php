<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>DERS GİR</h1>
        <form action="derskaydet.php" method="get">
            <input type="text" class="mb-3" name="dersler"><br>
            <input type="submit" class="btn btn-success" value="KAYDET" name="ekle">
            <a href="ders.php" class="btn btn-warning">
            <<< Geri Dön <<<</a>
        </form>
    </div>
</body>

</html>