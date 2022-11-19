<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Basdat</title>
</head>
<body>
    <header>
        <h1>Pendaftaran Stasiun Baru</h1>
    </header>
    <a href="index.php">Homepage</a>
    <form action="tambahstasiun.php" method="post">
        <fieldset>
            <p>
                <label for="nama_stasiun">Nama Stasiun :</label>
                <input type="text" name="nama_stasiun" />
            </p>
            <p>
                <label for="kota_stasiun">Kota Stasiun :</label>
                <input type="text" name="kota_stasiun" />
            </p>
            <input type="submit" value="Tambah Stasiun" name="tambahstasiun" />
        </fieldset>
    </form>
</body>
</html>