<?php
include("config.php");
// cek apakah tombol di form sudah diklik atau belum
if(isset($_POST['deletekereta'])){

    $id_kereta = (int)$_POST['id_kereta'];
	// buat query
    $query3 = pg_query("DELETE FROM bukti_pembelian_tiket WHERE id_tiket IN (SELECT id FROM tiket WHERE id_kereta = $id_kereta)");
    $query2 = pg_query("DELETE FROM tiket WHERE id_kereta = $id_kereta");
    $query1 = pg_query("DELETE FROM kereta WHERE id = $id_kereta");

	// apakah query simpan berhasil?
	if( $query1==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php 
		header('Location: index.php?status=hapusKeretaBerhasil');
	} else {
		// kalau gagal kembalikan ke halaman form
		header('Location: daftarkereta_page.php');
	}


} else {
	die("Akses dilarang...");
}
?>