<?php
    include('config.php');
    $tiket_query = pg_query("SELECT t.*,sa.nama as stasiun_asal,st.nama as stasiun_tujuan,k.nama as kereta,k.kapasitas as kapasitas from tiket as t,stasiun as sa, stasiun as st,kereta as k where t.id_stasiun_tujuan = st.id AND t.id_stasiun_sumber = sa.id AND t.id_kereta = k.id ;");
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
        <h1>Pemesanan Tiket</h1>
    </header>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Stasiun Asal</th>
                <th>Stasiun Tujuan</th>
                <th>Kereta</th>
                <th>Harga</th>
                <th>Jadwal Berangkat</th>
                <th>Jadwal Sampai</th>
                <th>Pemesanan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($tiket = pg_fetch_array($tiket_query)) {
                    echo "<tr>";
                    echo "<td>".$tiket['id']."</td>";
                    echo "<td>".$tiket['stasiun_asal']."</td>";
                    echo "<td>".$tiket['stasiun_tujuan']."</td>";
                    echo "<td>".$tiket['kereta']."</td>";
                    echo "<td>".$tiket['harga']."</td>";
                    echo "<td>".$tiket['jadwal_berangkat']."</td>";
                    echo "<td>".$tiket['jadwal_sampai']."</td>"; ?>
                    <td>
                        <form action="pesantiket.php" method="post">
                            <input type="hidden" name="id_tiket_dipesan" value="<?php echo $tiket['id']?>">
                            <label for="namauser">Nama Penumpang :</label><br>
                            <input type="text" name="namauser" /><br>
                            <label for="no_kursi_kereta">Nomor Kursi :</label>
                            <input type="number" name="no_kursi_kereta" min="1" max="<?php echo $tiket['kapasitas']?>" /><br>
                            <input type="submit" value="Pesan" name="pesantiket">
                        </form>
                    </td>
                    <?php
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>