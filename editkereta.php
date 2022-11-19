<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['editkereta'])){

	// ambil data dari formulir
    $id_kereta = (int)$_POST['id_kereta'];
    $nama_kereta = $_POST['nama_kereta'];
    $kapasitas = (int)$_POST['kapasitas'];
    $operasional = $_POST['operasional'];
    if ($operasional === 'Ya'){
        $operasional = 'true';
    } elseif ($operasional === 'Tidak') {
        $operasional = 'false';
    }

	// buat query
    $query = pg_query("UPDATE kereta SET nama = '$nama_kereta', beroperasi = $operasional, kapasitas = $kapasitas WHERE id = $id_kereta");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php?status=editKeretaBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: tambahkereta_page.php');
	}


} else {
	die("Akses dilarang...");
}
?>