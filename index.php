<?php
    if (isset($_GET['status'])) {
        print($_GET['status']);
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
        <h1>Pemesanan Tiket PT KAW</h1>
    </header>
    <p>
        <h3>User</h3>
        <ul>
        </ul>
    </p>
    <p>
        <h3>Admin</h3>
        <ul>
            <li><a href="buattiket_page.php">Pembuatan Tiket Baru</a></li>
            <li><a href="tambahkereta_page.php">Pendaftaran Kereta Baru</a></li>
            <li><a href="daftarkereta_page.php">Daftar Kereta</a></li>
            <li><a href="tambahstasiun_page.php">Pendaftaran Stasiun Baru</a></li>
        </ul>
    </p>
</body>
</html>