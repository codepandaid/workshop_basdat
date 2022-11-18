<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['deletekereta'])){

    // Ambil data dari $_POST
    $id_kereta = $_POST['id'];

	// Delete semua data yang berhubungan dengan kereta, dari yang paling kuat hingga paling lemah hingga kereta
    $query = pg_query("DELETE FROM bukti_pembelian_tiket WHERE id_tiket IN (SELECT id FROM tiket WHERE id_kereta = $id_kereta)");
    $query = pg_query("DELETE FROM tiket WHERE id_kereta = $id_kereta");
    $query2 = pg_query("DELETE FROM kereta WHERE id = $id_kereta");

	// apakah query berhasil?
	if( $query==TRUE && $query2==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: daftarkereta_page.php');
	}


} else {
	die("Akses dilarang...");
}
?>