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
        <h1>Pendaftaran Kereta Baru</h1>
    </header>

    <a href="index.php">Homepage</a>

    <form action="tambahkereta.php" method="post">
        <fieldset>
            <p>
                <label for="nama_kereta">Nama Kereta :</label>
                <input type="text" name="nama_kereta" />
            </p>
            <p>
                <label for="operasional">Apakah kereta dapat beroperasi?</label><br>
                <input type="radio" name="operasional" value="Ya">Ya</input>
                <input type="radio" name="operasional" value="Tidak">Tidak</input>
            </p>
            <p>
                <label for="kapasitas">Kapasitas :</label>
                <input type="number" name="kapasitas" />
            </p>
        </fieldset>
        <br>
        <input type="submit" value="Tambah Kereta" name="tambahkereta" />
    </form>
</body>
</html>