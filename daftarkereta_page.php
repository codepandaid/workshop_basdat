<?php
    include('config.php');
    $kereta_query = pg_query("SELECT * FROM kereta order by id;");
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
        <h1>Daftar Kereta</h1>
    </header>
    <body>
        <table border="2">
            <thead>
                <tr>
                    <th>ID Kereta</th>
                    <th>Nama</th>
                    <th>Status Operasi</th>
                    <th>Kapasitas</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($kereta=pg_fetch_array($kereta_query)) {
                    ?>
                    <tr>
                        <td><?= $kereta['id']?></td>
                        <td><?= $kereta['nama']?></td>
                        <td><?php
                            if ($kereta['beroperasi'] == 't') {
                                echo "Beroperasional";
                            } else {
                                echo "Tidak Beroperasional";
                            }
                        ?></td>
                        <td><?= $kereta['kapasitas']?></td>
                        <td>
                            <form action="editkereta_page.php" method="post">
                                <input type="hidden" value="<?= $kereta['id']?>" name="id" />
                                <input type="submit" value="Edit" name="editkereta" />
                            </form>
                            <form action="deletekereta.php" method="post">
                                <input type="hidden" value="<?= $kereta['id']?>" name="id" />
                                <input type="submit" value="Delete" name="deletekereta" />
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</body>
</html>