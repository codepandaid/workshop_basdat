<?php
    include("config.php");
    $st_asal_query = pg_query("SELECT * FROM stasiun");
    $st_tujuan_query = pg_query("SELECT * FROM stasiun");
    $kereta_query = pg_query("SELECT * FROM kereta");
?>

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
        <h1>Pembuatan Tiket Baru</h1>
    </header>
    <form action="buattiket.php" method="post">
        <fieldset>
            <p>
                <label for="st_asal">Stasiun Asal :</label>
                <select name="st_asal" id="st_asal">
                    <?php
                        while($stasiun_asal = pg_fetch_array($st_asal_query)) {
                            echo "<option value=".$stasiun_asal['id'].">".$stasiun_asal['nama']."</option>";
                        }
                    ?>
                </select>
            </p>
            <p>
                <label for="st_tujuan">Stasiun Tujuan :</label>
                <select name="st_tujuan" id="st_tujuan">
                    <?php
                        while($stasiun_tujuan = pg_fetch_array($st_tujuan_query)) {
                            echo "<option value=".$stasiun_tujuan['id'].">".$stasiun_tujuan['nama']."</option>";
                        }
                    ?>
                </select>
            </p>
            <p>
                <label for="kereta">Kereta :</label>
                <select name="kereta" id="kereta">
                    <?php
                        while($kereta = pg_fetch_array($kereta_query)){
                            echo "<option value=".$kereta['id'].">".$kereta['nama']."</option>";
                        }
                    ?>
                </select>
            </p>
            <p>
                <label for="harga">Harga Tiket :</label>
                <input type="number" name="harga" />
            </p>
            <p>
                <label for="jadwal_berangkat">Jadwal Berangkat :</label>
                <input type="datetime-local" name="jadwal_berangkat" />
            </p>
            <p>
                <label for="jadwal_sampai">Jadwal Sampai :</label>
                <input type="datetime-local" name="jadwal_sampai" />
            </p>
            <br>
        </fieldset>
        <input type="submit" value="Buat Tiket" name="buattiket">
    </form>
</body>
</html>