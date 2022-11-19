<?php 
    include('config.php');
    $stasiun_query = pg_query("SELECT * FROM stasiun");
    $stasiun_query_1 = pg_query("SELECT * FROM stasiun");
    $kereta_query = pg_query("SELECT * FROM kereta WHERE beroperasi = 't'");
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
        <h1>Pembuatan Tiket Baru KAW</h1>
    </header>
    <form action="buattiket.php" method="post">
        <fieldset>
            <label for="st_tujuan">Stasiun Tujuan :</label>
            <select name="st_tujuan" id="">
                <?php while($stasiun = pg_fetch_array($stasiun_query)) {
                    echo "<option value=".$stasiun['id'].">".$stasiun['nama']."</option>";
                }
            ?>
            </select>
            <label for="st_sumber">Stasiun Sumber :</label>
            <select name="st_sumber" id="">
                <?php while($stasiun = pg_fetch_array($stasiun_query_1)) {
                    echo "<option value=".$stasiun['id'].">".$stasiun['nama']."</option>";
                }
            ?>
            </select>
            <br>
            <label for="kereta">Kereta :</label>
            <select name="kereta" id="">
                <?php while($kereta = pg_fetch_array($kereta_query)) {
                    echo "<option value='".$kereta['id']."'>".$kereta['nama']."</option>";
                }
            ?>
            </select>
            <br>
            <label for="harga">Harga :</label>
            <input type="number" name="harga" />
            <br>
            <label for="jadwal_berangkat">Jadwal Berangkat :</label>
            <input type="datetime-local" name="jadwal_berangkat" />
            <br>
            <label for="jadwal_sampai">Jadwal Sampai :</label>
            <input type="datetime-local" name="jadwal_sampai" />
        </fieldset>
        <input type="submit" value="Buat Tiket" name="buattiket" />
    </form>
</body>
</html>