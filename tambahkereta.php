<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['tambahkereta'])){

	// ambil data dari formulir
    $nama_kereta = $_POST['nama_kereta'];
    $kapasitas = $_POST['kapasitas'];
    $operasional = $_POST['operasional'];
    if ($operasional === 'Ya'){
        $operasional = 'true';
    } elseif ($operasional === 'Tidak') {
        $operasional = 'false';
    }

	// buat query
  $query = pg_query("INSERT INTO kereta (nama, beroperasi, kapasitas) VALUEs ('$nama_kereta', $operasional, $kapasitas)");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: tambahkereta.php');
	}


} else {
	die("Akses dilarang...");
}
?>