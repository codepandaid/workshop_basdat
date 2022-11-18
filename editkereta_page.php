<?php
    include('config.php');
    if(isset($_POST['editkereta'])){
        $id_kereta = (int)$_POST['id'];
        $kereta_query = pg_query("SELECT * FROM kereta WHERE id = $id_kereta");
        $kereta = pg_fetch_array($kereta_query);
    }
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
        <h1>Edit Data Kereta</h1>
    </header>
    <body>
        <form action="editkereta.php" method="post">
            <fieldset>
                <input type="hidden" name="id_kereta" value="<?= $id_kereta?>"/>
                <p>
                    <label for="nama_kereta">Nama Kereta :</label>
                    <input type="text" name="nama_kereta" value="<?= $kereta['nama']?>" />
                </p>
                <p>
                    <label for="operasional">Apakah kereta dapat beroperasi?</label><br>
                    <?php 
                        if ($kereta['beroperasi'] == 't'){
                        ?>
                        <input type="radio" name="operasional" value="Ya" checked>Ya</input>
                        <input type="radio" name="operasional" value="Tidak">Tidak</input>
                        <?php
                        } else { ?>
                            <input type="radio" name="operasional" value="Ya">Ya</input>
                        <input type="radio" name="operasional" value="Tidak" checked>Tidak</input>
                        <?php }
                    ?>
                </p>
                <p>
                    <label for="kapasitas">Kapasitas :</label>
                    <input type="number" name="kapasitas" value=<?= $kereta['kapasitas']?> />
                </p>
            </fieldset>
            <br>
            <input type="submit" value="Tambah Kereta" name="tambahkereta" />
        </form>
    </body>
</body>
</html>