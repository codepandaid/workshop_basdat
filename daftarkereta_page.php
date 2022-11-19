<?php
    include('config.php');
    $kereta_query = pg_query("SELECT * FROM kereta ORDER BY id");

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
        <h1>Daftar Kereta KAW</h1>
    </header>
    <a href="index.php">Homepage</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID Kereta</th>
                <th>Nama Kereta</th>
                <th>Status Operasional</th>
                <th>Kapasitas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($kereta = pg_fetch_array($kereta_query)) {
                    ?>
                    <tr>
                    <td><?= $kereta['id']?></td>
                    <td><?= $kereta['nama']?></td>
                    <td>
                        <?php 
                            $status_kereta = $kereta['beroperasi'];
                            if ($status_kereta == 't') {
                                echo "Aktif";
                            } elseif ($status_kereta == 'f') {
                                echo "Tidak Aktif";
                            }
                        ?>
                    </td>
                    <td><?= $kereta['kapasitas']?></td>
                    <td>
                        <form action="editkereta_page.php" method="post">
                            <input type="hidden" name="id_kereta" value="<?= $kereta['id']?>">
                            <input type="submit" name="editkereta" value="Edit"/>
                        </form>
                        <form action="deletekereta.php" method="post">
                            <input type="hidden" name="id_kereta" value="<?= $kereta['id']?>">
                            <input type="submit" name="deletekereta" value="Hapus"/>
                        </form>
                    </td>
                    </tr>
                <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>